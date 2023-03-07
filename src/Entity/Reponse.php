<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("reclamation")]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message:"Le champ reponse est obligatoire.")]
    #[Assert\Length([
        'min' => 5,
        'max' => 50,
        'minMessage' => 'Votre reponse doit comporter au moins {{ limit }} caractères',
        'maxMessage' => 'Votre reponse doit comporter au moins {{ limit }} caractères',
    ])]
    #[Groups("reclamation")]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'id_reponse')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reclamation $id_reclamation = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_assureur = null;

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

    public function getIdReclamation(): ?Reclamation
    {
        return $this->id_reclamation;
    }

    public function setIdReclamation(?Reclamation $id_reclamation): self
    {
        $this->id_reclamation = $id_reclamation;

        return $this;
    }

    public function getIdAssureur(): ?User
    {
        return $this->id_assureur;
    }

    public function setIdAssureur(?User $id_assureur): self
    {
        $this->id_assureur = $id_assureur;

        return $this;
    }

    public function __toString() {
        return (string) $this->getId();
    }
}
