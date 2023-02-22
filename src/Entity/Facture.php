<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_client = null;

<<<<<<< HEAD
    #[ORM\OneToMany(mappedBy: 'facture', targetEntity: Offre::class)]
    private Collection $id_offre;
=======
    
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f

    public function __construct()
    {
        $this->id_offre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?User
    {
        return $this->id_client;
    }

    public function setIdClient(User $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return Collection<int, Offre>
     */
    public function getIdOffre(): Collection
    {
        return $this->id_offre;
    }

    public function addIdOffre(Offre $idOffre): self
    {
        if (!$this->id_offre->contains($idOffre)) {
            $this->id_offre->add($idOffre);
            $idOffre->setFacture($this);
        }

        return $this;
    }

    public function removeIdOffre(Offre $idOffre): self
    {
        if ($this->id_offre->removeElement($idOffre)) {
            // set the owning side to null (unless already changed)
            if ($idOffre->getFacture() === $this) {
                $idOffre->setFacture(null);
            }
        }

        return $this;
    }
=======
    
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
}
