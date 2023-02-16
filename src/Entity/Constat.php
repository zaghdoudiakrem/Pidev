<?php

namespace App\Entity;

use App\Repository\ConstatRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ConstatRepository::class)]
class Constat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typevehicule_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marquevehicule_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $assuranceclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emplacementaccid = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoaccid = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptiondegat = null;

    #[ORM\Column(type: Types::TEXT)]
    
    private ?string $observations = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numcontrat_e = null;

    #[ORM\ManyToOne(inversedBy: 'constats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_expert = null;

    #[ORM\ManyToOne(inversedBy: 'constats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $id_vehicule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomclientE(): ?string
    {
        return $this->nomclient_e;
    }

    public function setNomclientE(?string $nomclient_e): self
    {
        $this->nomclient_e = $nomclient_e;

        return $this;
    }

    public function getPrenomclientE(): ?string
    {
        return $this->prenomclient_e;
    }

    public function setPrenomclientE(?string $prenomclient_e): self
    {
        $this->prenomclient_e = $prenomclient_e;

        return $this;
    }

    public function getTypevehiculeE(): ?string
    {
        return $this->typevehicule_e;
    }

    public function setTypevehiculeE(?string $typevehicule_e): self
    {
        $this->typevehicule_e = $typevehicule_e;

        return $this;
    }

    public function getMarquevehiculeE(): ?string
    {
        return $this->marquevehicule_e;
    }

    public function setMarquevehiculeE(?string $marquevehicule_e): self
    {
        $this->marquevehicule_e = $marquevehicule_e;

        return $this;
    }

    public function getAssuranceclientE(): ?string
    {
        return $this->assuranceclient_e;
    }

    public function setAssuranceclientE(?string $assuranceclient_e): self
    {
        $this->assuranceclient_e = $assuranceclient_e;

        return $this;
    }

    public function getAdresseclientE(): ?string
    {
        return $this->adresseclient_e;
    }

    public function setAdresseclientE(?string $adresseclient_e): self
    {
        $this->adresseclient_e = $adresseclient_e;

        return $this;
    }

    public function getEmplacementaccid(): ?string
    {
        return $this->emplacementaccid;
    }

    public function setEmplacementaccid(?string $emplacementaccid): self
    {
        $this->emplacementaccid = $emplacementaccid;

        return $this;
    }

    public function getPhotoaccid(): ?string
    {
        return $this->photoaccid;
    }

    public function setPhotoaccid(?string $photoaccid): self
    {
        $this->photoaccid = $photoaccid;

        return $this;
    }

    public function getDescriptiondegat(): ?string
    {
        return $this->descriptiondegat;
    }

    public function setDescriptiondegat(string $descriptiondegat): self
    {
        $this->descriptiondegat = $descriptiondegat;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getNumcontratE(): ?string
    {
        return $this->numcontrat_e;
    }

    public function setNumcontratE(?string $numcontrat_e): self
    {
        $this->numcontrat_e = $numcontrat_e;

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

    public function getIdVehicule(): ?Vehicule
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(?Vehicule $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }
}
