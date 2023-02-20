<?php

namespace App\Entity;

use App\Repository\LocaleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocaleRepository::class)]
class Locale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\ManyToOne(inversedBy: 'locales')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_mecanicien = null;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

}
