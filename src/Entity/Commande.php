<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $isPaid = null;

    #[ORM\Column(length: 255)]
    private ?string $methode = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $stripeSessionId = null;

    #[ORM\ManyToOne(inversedBy: 'Commande')]
    private ?Users $com_users = null;


    #[ORM\Column(length: 255)]
    private ?string $reference = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $CreateAt = null;


    #[ORM\Column(nullable: true)]
    private ?int $ComFactId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Total = null;

    #[ORM\OneToMany(mappedBy: 'panier_com', targetEntity: Panier::class)]
    private Collection $paniers;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Adresse $com_adr_fact = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prix = null;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
    }

    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(bool $isPaid): static
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->methode;
    }

    public function setMethode(string $methode): static
    {
        $this->methode = $methode;

        return $this;
    }

    public function getStripeSessionId(): ?string
    {
        return $this->stripeSessionId;
    }

    public function setStripeSessionId(string $stripeSessionId): static
    {
        $this->stripeSessionId = $stripeSessionId;

        return $this;
    }

    


    public function getComUsers(): ?Users
    {
        return $this->com_users;
    }

    public function setComUsers(?Users $com_users): static
    {
        $this->com_users = $com_users;

        return $this;
    }

    

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->CreateAt;
    }

    public function setCreateAt(\DateTimeImmutable $CreateAt): static
    {
        $this->CreateAt = $CreateAt;

        return $this;
    }

    

    public function getComFactId(): ?int
    {
        return $this->ComFactId;
    }

    public function setComFactId(int $ComFactId): static
    {
        $this->ComFactId = $ComFactId;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->Total;
    }

    public function setTotal(string $Total): static
    {
        $this->Total = $Total;

        return $this;
    }

    /**
     * @return Collection<int, Panier>
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): static
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers->add($panier);
            $panier->setPanierCom($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): static
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getPanierCom() === $this) {
                $panier->setPanierCom(null);
            }
        }

        return $this;
    }

    public function getComAdrFact(): ?Adresse
    {
        return $this->com_adr_fact;
    }

    public function setComAdrFact(?Adresse $com_adr_fact): static
    {
        $this->com_adr_fact = $com_adr_fact;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    


}
