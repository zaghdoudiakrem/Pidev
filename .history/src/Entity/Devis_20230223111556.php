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


#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

     

    #[ORM\ManyToOne(inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_mecanicien = null;

    #[ORM\Column]
    private ?int $id_expert = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    
    #[ORM\Column]
    private ?float $totalHt;    

    #[ORM\OneToMany(mappedBy: 'devis', targetEntity: DevisItem::class, orphanRemoval: true,cascade: ["persist", "remove"])]
    private Collection $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();   
        $this->totalHt = 0;
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate():?\DateTimeInterface{
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date):self {
        $this->date = new \DateTimeImmutable();
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
    public ?String $nom_expert="";
    public function setExpertNom(String $nom_expert): self
    {
        $this->nom_expert = $nom_expert;

        return $this;
    }
    public ?String $prenom_expert="";
    public function setExpertPrenom(String $prenom_expert): self
    {
        $this->prenom_expert = $prenom_expert;

        return $this;
    }
    public function calculateTotalHt(): self
    {
        $totalHt = 0;
        foreach ($this->items as $item) {
            $totalHt += $item->getTotalPrice();
        }
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * @return Collection<int, DevisItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(DevisItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setDevis($this);
            $this->calculateTotalHt();
        }

        return $this;
    }

    public function removeItem(DevisItem $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getDevis() === $this) {
                $item->setDevis(null);
            }
            $this->calculateTotalHt();
        }

        return $this;
    }
    public function __toString(): string
{
    return (string) $this->id;
}

    
}



    

