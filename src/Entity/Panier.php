<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column( nullable: true)]
    private ?int $panier_qte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prix_unite = null;

    #[ORM\Column(length: 255)]
    private ?string $total = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    private ?Commande $panier_com = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPanierQte(): ?int
    {
        return $this->panier_qte;
    }

    public function setPanierQte(int $panier_qte): static
    {
        $this->panier_qte = $panier_qte;

        return $this;
    }

   
    public function getPrixUnite(): ?string
    {
        return $this->prix_unite;
    }

    public function setPrixUnite(string $prix_unite): static
    {
        $this->prix_unite = $prix_unite;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getPanierCom(): ?Commande
    {
        return $this->panier_com;
    }

    public function setPanierCom(?Commande $panier_com): static
    {
        $this->panier_com = $panier_com;

        return $this;
    }



    
}
