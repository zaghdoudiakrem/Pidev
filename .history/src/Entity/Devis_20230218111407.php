<?php

// namespace App\Entity;

// use App\Repository\DevisRepository;
// use Doctrine\DBAL\Types\Types;
// use Doctrine\ORM\Mapping as ORM;

// #[ORM\Entity(repositoryClass: DevisRepository::class)]
// class Devis
// {
//     #[ORM\Id]
//     #[ORM\GeneratedValue]
//     #[ORM\Column]
//     private ?int $id = null;

//     #[ORM\Column]
//     private ?float $montant = null;

//     #[ORM\Column(type: Types::TEXT)]
//     private ?string $description = null;

//     #[ORM\Column]
//     private ?bool $etat = null;

//     #[ORM\ManyToOne(inversedBy: 'devis')]
//     #[ORM\JoinColumn(nullable: false)]
//     private ?User $id_mecanicien = null;

//     #[ORM\Column]
//     private ?int $id_expert = null;

//     public function getId(): ?int
//     {
//         return $this->id;
//     }

//     public function getMontant(): ?float
//     {
//         return $this->montant;
//     }

//     public function setMontant(float $montant): self
//     {
//         $this->montant = $montant;

//         return $this;
//     }

//     public function getDescription(): ?string
//     {
//         return $this->description;
//     }

//     public function setDescription(string $description): self
//     {
//         $this->description = $description;

//         return $this;
//     }

//     public function isEtat(): ?bool
//     {
//         return $this->etat;
//     }

//     public function setEtat(bool $etat): self
//     {
//         $this->etat = $etat;

//         return $this;
//     }

//     public function getIdMecanicien(): ?User
//     {
//         return $this->id_mecanicien;
//     }

//     public function setIdMecanicien(?User $id_mecanicien): self
//     {
//         $this->id_mecanicien = $id_mecanicien;

//         return $this;
//     }

//     public function getIdExpert(): ?int
//     {
//         return $this->id_expert;
//     }

//     public function setIdExpert(int $id_expert): self
//     {
//         $this->id_expert = $id_expert;

//         return $this;
//     }



// src/Entity/Devis.php
namespace App\Entity;
use Doctrine\DBAL\Types\Types;
use App\Repository\DevisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


@ORM\Entity(repositoryClass=DevisRepository::class)
class Devis
{
   
      @ORM\Id
      @ORM\GeneratedValue
      @ORM\Column(type="integer")
     
    private $id;

    
     @ORM\OneToMany(targetEntity=DevisItem::class, mappedBy="devis", cascade={"persist"})
     
    private $items;
    #[ORM\ManyToOne(inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_mecanicien = null;

    #[ORM\Column]
    private ?int $id_expert = null;

    /**
     * @ORM\Column(type="float")
     */
    private $totalHt;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|DevisItem[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(DevisItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setDevis($this);
        }

        return $this;
    }

    public function removeItem(DevisItem $item): self
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
            if ($item->getDevis() === $this) {
                $item->setDevis(null);
            }
        }

        return $this;
    }

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(float $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }
    public function getIdMecanicien(): ?User
    {
        return $this->id_mecanicien;
    }

    public function setIdMecanicien(?User $id_mecanicien): self
    {
        $this->id_mecanicien = $id_mecanicien;

        return $this;
    }

    public function getIdExpert(): ?int
    {
        return $this->id_expert;
    }

    public function setIdExpert(int $id_expert): self
    {
        $this->id_expert = $id_expert;

        return $this;
    }
    
}
}


    
}
