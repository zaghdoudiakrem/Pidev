<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Range(min: 'now',max: "+1 year",)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 4,minMessage: "veuillez avoir au minimum 4 caractere" )]
    #[Assert\NotBlank]
    private ?string $lieu = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    private ?User $id_client = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_expert = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_mecanicien = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

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

    public function getIdExpert(): ?int
    {
        return $this->id_expert;
    }

    public function setIdExpert(int $id_expert): self
    {
        $this->id_expert = $id_expert;

        return $this;
    }

    public function getIdMecanicien(): ?int
    {
        return $this->id_mecanicien;
    }

    public function setIdMecanicien(?int $id_mecanicien): self
    {
        $this->id_mecanicien = $id_mecanicien;

        return $this;
    }
}
