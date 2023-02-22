<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ Matricule est obligatoire")]
    #[Assert\Length([
        'max' => 10,
        'maxMessage' => 'Le champ matricule doit contenir moins de {{ limit }} caractères.',
    ])]

    private ?string $matricule = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ Marque est obligatoire")]


    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ Type est obligatoire")]
   

    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le champ Nombre de chevaux est obligatoire")]
    #[Assert\Positive()]

    private ?int $nb_ch = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_client = null;

    #[ORM\OneToOne(mappedBy: 'id_vehicule', cascade: ['persist', 'remove'])]
    private ?Contrat $id_contrat = null;

    #[ORM\OneToMany(mappedBy: 'id_vehicule', targetEntity: Constat::class)]
    private Collection $constats;

    public function __construct()
    {
        $this->constats = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNbCh(): ?int
    {
        return $this->nb_ch;
    }

    public function setNbCh(int $nb_ch): self
    {
        $this->nb_ch = $nb_ch;

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

    public function getIdContrat(): ?Contrat
    {
        return $this->id_contrat;
    }

    public function setIdContrat(Contrat $id_contrat): self
    {
        // set the owning side of the relation if necessary
        if ($id_contrat->getIdVehicule() !== $this) {
            $id_contrat->setIdVehicule($this);
        }

        $this->id_contrat = $id_contrat;

        return $this;
    }

    /**
     * @return Collection<int, Constat>
     */
    public function getConstats(): Collection
    {
        return $this->constats;
    }

    public function addConstat(Constat $constat): self
    {
        if (!$this->constats->contains($constat)) {
            $this->constats->add($constat);
            $constat->setIdVehicule($this);
        }

        return $this;
    }

    public function removeConstat(Constat $constat): self
    {
        if ($this->constats->removeElement($constat)) {
            // set the owning side to null (unless already changed)
            if ($constat->getIdVehicule() === $this) {
                $constat->setIdVehicule(null);
            }
        }

        return $this;
    }
    public function __toString()
  {       
    return (string) $this->getId();
  }

}
