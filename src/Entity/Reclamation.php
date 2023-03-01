<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;


#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message:"Le champ description est obligatoire.")]
    #[Assert\Length([
        'min' => 5,
        'max' => 50,
        'minMessage' => 'Votre description doit comporter au moins {{ limit }} caractères',
        'maxMessage' => 'Votre description doit comporter au moins {{ limit }} caractères',
    ])]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ objet est obligatoire.")]
    #[Assert\Length([
        'min' => 5,
        'max' => 50,
        'minMessage' => 'Votre Objet doit comporter au moins {{ limit }} caractères',
        'maxMessage' => 'Votre objet doit comporter au moins {{ limit }} caractères',
    ])]
    private ?string $objet = null;

    #[ORM\OneToMany(mappedBy: 'id_reclamation', targetEntity: Reponse::class)]
    private Collection $id_reponse;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_client = null;

   


    public function __construct()
    {
        $this->id_reponse = new ArrayCollection();
    }

   
 

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

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getIdReponse(): Collection
    {
        return $this->id_reponse;
    }

    public function addIdReponse(Reponse $idReponse): self
    {
        if (!$this->id_reponse->contains($idReponse)) {
            $this->id_reponse->add($idReponse);
            $idReponse->setIdReclamation($this);
        }

        return $this;
    }

    public function removeIdReponse(Reponse $idReponse): self
    {
        if ($this->id_reponse->removeElement($idReponse)) {
            // set the owning side to null (unless already changed)
            if ($idReponse->getIdReclamation() === $this) {
                $idReponse->setIdReclamation(null);
            }
        }

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

    public function __toString() {
        return (string) $this->getId();
    }

}
