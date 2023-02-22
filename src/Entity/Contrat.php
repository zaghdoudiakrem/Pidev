<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f

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

<<<<<<< HEAD
=======
    #[ORM\Column(length: 255)]
    private ?string $photo_cin = null;

    #[ORM\ManyToMany(targetEntity: Offre::class, inversedBy: 'contrats')]
    private Collection $id_offre;

    public function __construct()
    {
        $this->id_offre = new ArrayCollection();
    }

   

    

>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
  

  

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

<<<<<<< HEAD
=======
    public function getPhotoCin(): ?string
    {
        return $this->photo_cin;
    }

    public function setPhotoCin(string $photo_cin): self
    {
        $this->photo_cin = $photo_cin;

        return $this;
    }

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
        }

        return $this;
    }

    public function removeIdOffre(Offre $idOffre): self
    {
        $this->id_offre->removeElement($idOffre);

        return $this;
    }

    

 

>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
 

}
