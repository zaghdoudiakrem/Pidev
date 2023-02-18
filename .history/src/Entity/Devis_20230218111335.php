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
    
}
