<?php

namespace App\Entity;

use App\Repository\OffreRepository;
<<<<<<< HEAD
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
<<<<<<< HEAD
    private ?float $prix = null;
=======
    private ?string $prix = null;
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'id_offre')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Facture $facture = null;
=======
    #[ORM\Column(length: 255)]
    private ?string $Validite_offre = null;

    #[ORM\ManyToMany(targetEntity: Contrat::class, mappedBy: 'id_offre')]
    private Collection $contrats;

    #[ORM\Column(length: 255)]
    private ?string $image_offre = null;

    public function __construct()
    {
        $this->contrats = new ArrayCollection();
    }

    // #[ORM\Column(length: 255)]
    // private ?string $photo_offre = null;

    

    

   
    

    

   
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f

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

<<<<<<< HEAD
    public function getPrix(): ?float
=======
    public function getPrix(): ?string
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        return $this->prix;
    }

<<<<<<< HEAD
    public function setPrix(float $prix): self
=======
    public function setPrix(string $prix): self
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
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

<<<<<<< HEAD
    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }
=======
    public function getValiditeOffre(): ?string
    {
        return $this->Validite_offre;
    }

    public function setValiditeOffre(string $Validite_offre): self
    {
        $this->Validite_offre = $Validite_offre;

        return $this;
    }

    public function __toString(){
        return (string) $this->titre;
    }

    // public function getPhotoOffre(): ?string
    // {
    //     return $this->photo_offre;
    // }

    // public function setPhotoOffre(string $photo_offre): self
    // {
    //     $this->photo_offre = $photo_offre;

    //     return $this;
    // }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrats(): Collection
    {
        return $this->contrats;
    }

    public function addContrat(Contrat $contrat): self
    {
        if (!$this->contrats->contains($contrat)) {
            $this->contrats->add($contrat);
            $contrat->addIdOffre($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        if ($this->contrats->removeElement($contrat)) {
            $contrat->removeIdOffre($this);
        }

        return $this;
    }

    public function getImageOffre(): ?string
    {
        return $this->image_offre;
    }

    public function setImageOffre(string $image_offre): self
    {
        $this->image_offre = $image_offre;

        return $this;
    }

    
     

    

    

   

  

   

   
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
}
