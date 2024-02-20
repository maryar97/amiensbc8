<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends AbstractController
{
    private EntityManagerInterface $em;
    private UrlGeneratorInterface $generator;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $generator)
    {
        $this->em = $em;
        $this->generator = $generator;
    }

    #[Route('/order/create-session-stripe/{reference}', name: 'payment_stripe')]
    public function stripeCheckout($reference): RedirectResponse
    {
        $formedeboxeStripe = [];
        $total = 0;
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

        if (!$commande) {
            return $this->redirectToRoute('app_cart');
        }

        foreach ($commande->getPaniers() as $panier) {
            $formedeboxe = $panier->getPanierCom();
            $total += $formedeboxe->getPrix();
        
            $formedeboxeStripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => (int) ($formedeboxe->getPrix() * 100),
                ],
                'product_data' => [
                    'name' => $formedeboxe->getNom(),
                ],
                'quantity' => $panier->getPanierQte(),
            ];
        }
        

        // Validation pour s'assurer que le montant total est un entier positif
        $totalInCents = (int) round($total * 100);
        if ($totalInCents <= 0) {
            // Gérer l'erreur ici (par exemple, rediriger vers une page d'erreur)
        }

        Stripe::setApiKey('ssk_test_51N0iZNFPaCkpFiEQttCloECeEN4D0G0JTO4KQgQuyGRFYWmqvRxMIFWepPVZaQnIklKcYIeqW6k61mDCvqgZomwl00wEVu0pyy');

        try {
            $checkout_session = Session::create([
                'customer_email' => $this->getUser()->getEmail(),
                'payment_method_types' => ['card'],
                'line_items' => [$formedeboxeStripe],
                'mode' => 'payment',
                'success_url' => $this->generator->generate('payment_success', ['reference' => $commande->getReference()], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generator->generate('payment_error', ['reference' => $commande->getReference()], UrlGeneratorInterface::ABSOLUTE_URL)
            ]);

            $commande->setStripeSessionId($checkout_session->id);
            $this->em->flush();

            return new RedirectResponse($checkout_session->url);
        } catch (ApiErrorException $e) {
            // Gérer l'erreur ici (par exemple, rediriger vers une page d'erreur)
        }
    }

    #[Route('/order/success/{reference}', name: 'payment_success')]
    public function StripeSuccess(SessionInterface $session, $reference, CartService $cartService, EntityManagerInterface $em): Response
    {
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

        $session->remove('cart');
        $commande->setComFactId($commande->getId());
        $em->persist($commande);
        $em->flush();

        return $this->render('commande/success.html.twig');
    }

    #[Route('/order/error/{reference}', name: 'payment_error')]
    public function StripeError(SessionInterface $session, $reference, CartService $cartService): Response
    {
        $session->remove('cart');

        return $this->render('commande/error.html.twig');
    }
}
