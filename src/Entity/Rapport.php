<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $rapport_preliminaire = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $rapport_expertise = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Constat $id_constat = null;

    #[ORM\ManyToOne(inversedBy: 'rapports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_expert = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRapportPreliminaire(): ?string
    {
        return $this->rapport_preliminaire;
    }

    public function setRapportPreliminaire(string $rapport_preliminaire): self
    {
        $this->rapport_preliminaire = $rapport_preliminaire;

        return $this;
    }

    public function getRapportExpertise(): ?string
    {
        return $this->rapport_expertise;
    }

    public function setRapportExpertise(string $rapport_expertise): self
    {
        $this->rapport_expertise = $rapport_expertise;

        return $this;
    }

    public function getIdConstat(): ?Constat
    {
        return $this->id_constat;
    }

    public function setIdConstat(Constat $id_constat): self
    {
        $this->id_constat = $id_constat;

        return $this;
    }

    public function getIdExpert(): ?User
    {
        return $this->id_expert;
    }

    public function setIdExpert(?User $id_expert): self
    {
        $this->id_expert = $id_expert;

        return $this;
    }
}
