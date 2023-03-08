<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    // #[Assert\GreaterThanOrEqual("today")]
    #[Assert\Range(min: 'today',max: "today")]
    private ?\DateTimeInterface $validitedu = null;

    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Range(min: 'today',max: "+1 year")]
    private ?\DateTimeInterface $validiteau = null;

    #[ORM\OneToOne(inversedBy: 'id_contrat', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $id_vehicule = null;

    #[ORM\ManyToOne(inversedBy: 'contrats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_client = null;

    #[ORM\Column(length: 255)]
    
    private ?string $photo_cin = null;

    #[ORM\ManyToMany(targetEntity: Offre::class, inversedBy: 'contrats')]
    private Collection $id_offre;

    public function __construct()
    {
        $this->id_offre = new ArrayCollection();
    }

   

    

  

  

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

    public ?String $matricule_vehicule="";
    public function setVehiculeMatricule(String $matricule_vehicule): self
    {
        $this->matricule_vehicule = $matricule_vehicule;

        return $this;
    }
    public ?String $type_vehicule="";
    public function setVehiculeType(String $type_vehicule): self
    {
        $this->type_vehicule = $type_vehicule;

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

    public ?String $nom_client="";
    public function setClientNom(String $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }
    public ?String $prenom_client="";
    public function setClientPrenom(String $prenom_client): self
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }
    public ?int $cin_client=null;
    public function setClientCin(int $cin_client): self
    {
        $this->cin_client = $cin_client;

        return $this;
    }
    
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
    // public ?String $titre_offre="";
    // public function setOffreTitre(String $titre_offre): self
    // {
    //     $this->titre_offre = $titre_offre;

    //     return $this;
    // }
    // public ?int $prix_offre=null;
    // public function setOffrePrix(int $prix_offre): self
    // {
    //     $this->prix_offre = $prix_offre;

    //     return $this;
    // }

   
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

    public function __toString(): string
    {
        return (string) $this->id;
    }

    // public function __toString2(): string
    // {
    //     return (string) $this->validitedu;
    // }
 
    // public function __toString3(): string
    // {
    //     return (string) $this->validiteau;
    // }
 

}
