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


// src/Entity/Locale.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocaleRepository")
 */
class Locale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    #[ORM\Column(length: 255)]
    private $address;

    #[ORM\Column]
    private float $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    #[ORM\ManyToOne(inversedBy: 'locales')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_mecanicien = null;

    // Getters and setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

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
