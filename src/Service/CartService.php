<?php

namespace App\Service;

use App\Entity\Formedeboxe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService 
{
    private RequestStack $requestStack; 
    private EntityManagerInterface $em; 

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function addToCart(int $id): void 
    {
        $cart = $this->requestStack->getSession()->get('cart', []);

        // Incrémentez la quantité du produit s'il existe déjà dans le panier, sinon ajoutez-le avec une quantité de 1
        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $this->requestStack->getSession()->set('cart', $cart);
    }

    public function removeToCart(int $id)
    {
        $cart = $this->requestStack->getSession()->get('cart', []);

        // Supprimez l'élément du panier
        unset($cart[$id]);

        // Mettez à jour la session avec le nouveau panier
        $this->requestStack->getSession()->set('cart', $cart);
    }

    public function decrease(int $id)
    {
        $cart = $this->requestStack->getSession()->get('cart', []);

        // Diminuez la quantité du produit
        if ($cart[$id] > 1) {
            $cart[$id]--;
        } else {
            unset($cart[$id]); // Supprimez le produit s'il n'y a qu'une seule unité
        }

        // Mettez à jour la session avec le nouveau panier
        $this->requestStack->getSession()->set('cart', $cart);
    }

    public function revoveCartAll()
    {
        // Supprimez tous les éléments du panier en supprimant la clé 'cart' de la session
        $this->requestStack->getSession()->remove('cart');
    }

    public function getTotal(): array
    {
        $cart = $this->requestStack->getSession()->get('cart', []); 
        $cartData = []; 

        // Parcourez les éléments du panier et récupérez les objets correspondants dans la base de données
        foreach ($cart as $id => $quantity) {
            $formedeboxe = $this->em->getRepository(Formedeboxe::class)->find($id);

            // Vérifiez si l'objet existe dans la base de données
            if ($formedeboxe) {
                $cartData[] = [
                    'formedeboxe' => $formedeboxe,
                    'quantity' => $quantity,
                ];
            } else {
                // Si l'objet n'existe pas, supprimez-le du panier
                unset($cart[$id]);
            }
        }

        // Mettez à jour la session avec le nouveau panier (après éventuelles suppressions)
        $this->requestStack->getSession()->set('cart', $cart);

        return $cartData;
    }
}
