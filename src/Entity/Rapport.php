<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\Length(min: 4,minMessage: "veuillez avoir au minimum 4 caractere" )]
    #[Assert\NotBlank]
    private ?string $rapportpreliminaire = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\Length(min: 4,minMessage: "veuillez avoir au minimum 4 caractere" )]
    #[Assert\NotBlank]
    private ?string $rapportexpertise = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Constat $id_constat = null;

    #[ORM\ManyToOne(inversedBy: 'rapports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_expert = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

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
        return $this->rapportpreliminaire;
    }

    public function setRapportPreliminaire(string $rapportpreliminaire): self
    {
        $this->rapportpreliminaire = $rapportpreliminaire;

        return $this;
    }

    public function getRapportExpertise(): ?string
    {
        return $this->rapportexpertise;
    }

    public function setRapportExpertise(string $rapportexpertise): self
    {
        $this->rapportexpertise = $rapportexpertise;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
