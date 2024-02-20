<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    
    private EntityManagerInterface $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em ;
    
    }
    #[Route('/order/create', name: 'order_create')]
    public function index(CartService $cartService): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
    
    

        // dd($this->getUser());

        $form = $this->createForm(CommandeType::class, data: null,options: [
            'user' => $this->getUser()
        ]);
        
        return $this->render('commande/index.html.twig', [
            'form' => $form->createView(),
            'recapCart' => $cartService->getTotal()
        ]);
    }
    #[Route('/order/verify', name: 'order_prepare', methods: ['POST'])]
    public function prepareOrder(SessionInterface $session, CartService $cartService, Request $request): Response
    {
        if(!$this->getUser()){

            return $this->redirectToRoute('app_connexion');
                    }

        $form = $this->createForm(CommandeType::class, data: null,options: [
            'user' =>$this->getUser()
        ]);
        $total=0;

        $form->handleRequest($request);

        IF($form->isSubmitted() && $form->isValid()){
            $datetimeimmutable = new \DateTimeImmutable( 'now');
            // dd($livraison->getTelephone());
    
            // $comId = $commandeRepository->findOneBy(['com_fact_id' => $id])->getId();
            // dd($livraisonForCommande);
            $commande = new Commande();
            $reference = $datetimeimmutable->format('dmy').'-'.uniqid(); 
            $facturation = $form->get('adresse')->getData();
            $commande->setComUsers($this->getUser());
            $commande->setReference($reference);
            $commande->setCreateAt($datetimeimmutable);
            $commande->setIsPaid('bool');
            $commande->setPrix(150);

            $commande->setMethode('stripe'); 
            // $commande->setStripeSessionId();
            // $commande->setComFactId($);
            $commande->setComAdrFact($facturation); 
            //$commande->setComFactId();
            // $commande->setDateFact($datetimeimmutable);            
            // $commande->setComAdrLivr($livraison);
            // dd($commande);
            // $commande->setComFactId($comId);
            // $commande->setDateFact($datetimeimmutable);
            $this->em->persist($commande);
            // dd($commande); 


            foreach($cartService->getTotal() as $formedeboxe)
            {
                // dd($formedeboxe);
                $panier = new Panier();
                $panier->setPanierCom($commande);  
                // $panier->setPanierQte($formedeboxe['quantite']); 
                $panier->setPrixUnite($formedeboxe['formedeboxe']->getPrix()); 
                // $panier->setFormedeboxe($formedeboxe['formedeboxe']);
                $panier->setTotal($formedeboxe['formedeboxe']->getPrix() );
                // $formedeboxe['formedeboxe']->setQuantite($formedeboxe['formedeboxe']->getQuantite() - $formedeboxe['quantite']); 
                $this->em->persist($panier);
                $this->em->flush();
        }

            // dd($form->getData()); 
            return $this->render('commande/recap.html.twig', [
                'total' => $total,
                'methode' => $commande->getMethode(),
                'recapCart' => $cartService->getTotal(),
                'reference' => $commande->getReference()
        ]);

        }

        return $this->redirectToRoute('app_cart');

    }
    
}