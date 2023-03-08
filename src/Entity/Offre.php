<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groupe("offres")]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groupe("searchoffres")]
    #[Groupe("offres")]
    #[Assert\NotNull(message:"La description est obligatoire")]
    
    private ?string $description = null;

    #[ORM\Column]
    #[Groupe("offres")]
    #[Groupe("searchoffres")]
    #[Assert\NotNull(message:"Le prix est obligatoire")]
    
    private ?int $prix = null;

    #[ORM\Column(length: 255)]
    #[Groupe("searchoffres")]
    #[Groupe("offres")]
    #[Assert\NotBlank(message:"Le titre est obligatoire")]
    #[Assert\Length([
        'min' => 10,
        'max' => 40,
        'minMessage' => 'le titre doit comporter au moins {{ limit }} caractères',
        'maxMessage' => 'Votre titre doit comporter au moins {{ limit }} caractères',
    ])]
    private ?string $titre = null;

    #[ORM\ManyToOne(inversedBy: 'id_offre')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Facture $facture = null;

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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }
}
