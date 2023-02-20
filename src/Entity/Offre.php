<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

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

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
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

    public function getValiditeOffre(): ?string
    {
        return $this->Validite_offre;
    }

    public function setValiditeOffre(string $Validite_offre): self
    {
        $this->Validite_offre = $Validite_offre;

        return $this;
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

    
     

    

    

   

  

   

   
}
