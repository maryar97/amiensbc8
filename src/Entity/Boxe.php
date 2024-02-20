<?php

namespace App\Entity;

use App\Repository\BoxeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoxeRepository::class)]
class Boxe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'boxe', targetEntity: formedeboxe::class)]
    private Collection $formedeboxe;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    public function __construct()
    {
        $this->formedeboxe = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, formedeboxe>
     */
    public function getFormedeboxe(): Collection
    {
        return $this->formedeboxe;
    }

    public function addFormedeboxe(formedeboxe $formedeboxe): static
    {
        if (!$this->formedeboxe->contains($formedeboxe)) {
            $this->formedeboxe->add($formedeboxe);
            $formedeboxe->setBoxe($this);
        }

        return $this;
    }

    public function removeFormedeboxe(formedeboxe $formedeboxe): static
    {
        if ($this->formedeboxe->removeElement($formedeboxe)) {
            // set the owning side to null (unless already changed)
            if ($formedeboxe->getBoxe() === $this) {
                $formedeboxe->setBoxe(null);
            }
        }

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }
}
