<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $validitedu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $validiteau = null;

    #[ORM\OneToOne(inversedBy: 'id_contrat', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $id_vehicule = null;

    #[ORM\ManyToOne(inversedBy: 'contrats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_client = null;

  

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValiditedu(): ?\DateTimeInterface
    {
        return $this->validitedu;
    }

    public function setValiditedu(\DateTimeInterface $validitedu): self
    {
        $this->validitedu = $validitedu;

        return $this;
    }

    public function getValiditeau(): ?\DateTimeInterface
    {
        return $this->validiteau;
    }

    public function setValiditeau(\DateTimeInterface $validiteau): self
    {
        $this->validiteau = $validiteau;

        return $this;
    }

    public function getIdVehicule(): ?Vehicule
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(Vehicule $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }

    public function getIdClient(): ?User
    {
        return $this->id_client;
    }

    public function setIdClient(?User $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

 

}
