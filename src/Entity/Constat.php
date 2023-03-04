<?php

namespace App\Entity;

use App\Repository\ConstatRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ConstatRepository::class)]
class Constat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("constats")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Nom Client est obligatoire")]
    #[Assert\Length(
              min : 3,
              max : 255,
              minMessage : "The name must be at least {{ limit }} characters long",
              maxMessage : "The name cannot be longer than {{ limit }} characters"   )]
              
    private ?string $nomclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Prenom Client est obligatoire")]
    #[Assert\Length(
        min : 3,
        max : 255,
        minMessage : "The lastname must be at least {{ limit }} characters long",
        maxMessage : "The lastname cannot be longer than {{ limit }} characters"   )]

    private ?string $prenomclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Type Vehicule est obligatoire")]
  
    private ?string $typevehicule_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Marque Vehicule est obligatoire")]

    private ?string $marquevehicule_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Assurance Client est obligatoire")]
    #[Assert\Length(
        min : 3,
        max : 255,
        minMessage : "L'assurance doit comporter au moins {{ limit }} caractères",
        maxMessage : "L'assurance ne peut pas dépasser {{ limit }} caractères"   )]

    private ?string $assuranceclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Adresse Client est obligatoire")]
    #[Assert\Length(
        min : 10,
        max : 255,
        minMessage : "L'adresse doit comporter au moins {{ limit }} caractères",
        maxMessage : "L'adresse ne peut pas dépasser {{ limit }} caractères"   )]
    


    private ?string $adresseclient_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Emplacement Accident est obligatoire")]
    #[Assert\Length(
        min : 10,
        max : 255,
        minMessage : "L'accident d'emplacement doit comporter au moins {{ limit }} caractères",
        maxMessage : "L'accident d'emplacement ne peut pas dépasser {{ limit }} caractères"   )]

    private ?string $emplacementaccid = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    /*#[Assert\NotBlank(message:"le champ Photo Accident est obligatoire")]
    #[Assert\Image([
      'maxSize' => '5M',
      'mimeTypes' => ['image/jpeg','image/png','image/gif', ],
      'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF)',
      'minWidth' => 200,
      'minWidthMessage' => "La largeur de la photo doit être d' au moins {{ limit }}px",
      'minHeight' => 200,
      'minHeightMessage' => "La hauteur de la photo doit être d' au moins {{ limit }}px",])]*/

    private ?string $photoaccid = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Description Degat est obligatoire")]
    #[Assert\Length(
        min : 20,
        max : 255,
        minMessage : "La description doit comporter au moins {{ limit }} caractères",
        maxMessage : "La description ne peut pas dépasser {{ limit }} caractères"   )]

    private ?string $descriptiondegat = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Observations est obligatoire")]
    #[Assert\Length(
        min : 20,
        max : 255,
        minMessage : "Les observations doivent comporter au moins {{ limit }} caractères",
        maxMessage : "Les observations ne peuvent pas dépasser {{ limit }} caractères"   )]

    
    private ?string $observations = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("constats")]
    #[Assert\NotBlank(message:"le champ Numéro Contrat est obligatoire")]
    #[Assert\Length(
        min : 10,
        max : 255,
        minMessage : "Le numéro de contrat doit comporter au moins {{ limit }} caractères",
        maxMessage : "Le numéro de contrat ne peut pas dépasser {{ limit }} caractères"   )]

    private ?string $numcontrat_e = null;

    #[ORM\ManyToOne(inversedBy: 'constats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_expert = null;

    #[ORM\ManyToOne(inversedBy: 'constats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $id_vehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(type:"datetime", nullable: true)]
    public ?\DateTime $Date_creation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $signatureId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $documentId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $signerId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PdfSansSignature = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomclientE(): ?string
    {
        return $this->nomclient_e;
    }

    public function setNomclientE(?string $nomclient_e): self
    {
        $this->nomclient_e = $nomclient_e;

        return $this;
    }

    public function getPrenomclientE(): ?string
    {
        return $this->prenomclient_e;
    }

    public function setPrenomclientE(?string $prenomclient_e): self
    {
        $this->prenomclient_e = $prenomclient_e;

        return $this;
    }

    public function getTypevehiculeE(): ?string
    {
        return $this->typevehicule_e;
    }

    public function setTypevehiculeE(?string $typevehicule_e): self
    {
        $this->typevehicule_e = $typevehicule_e;

        return $this;
    }

    public function getMarquevehiculeE(): ?string
    {
        return $this->marquevehicule_e;
    }

    public function setMarquevehiculeE(?string $marquevehicule_e): self
    {
        $this->marquevehicule_e = $marquevehicule_e;

        return $this;
    }

    public function getAssuranceclientE(): ?string
    {
        return $this->assuranceclient_e;
    }

    public function setAssuranceclientE(?string $assuranceclient_e): self
    {
        $this->assuranceclient_e = $assuranceclient_e;

        return $this;
    }

    public function getAdresseclientE(): ?string
    {
        return $this->adresseclient_e;
    }

    public function setAdresseclientE(?string $adresseclient_e): self
    {
        $this->adresseclient_e = $adresseclient_e;

        return $this;
    }

    public function getEmplacementaccid(): ?string
    {
        return $this->emplacementaccid;
    }

    public function setEmplacementaccid(?string $emplacementaccid): self
    {
        $this->emplacementaccid = $emplacementaccid;

        return $this;
    }

    public function getPhotoaccid(): ?string
    {
        return $this->photoaccid;
    }

    public function setPhotoaccid(?string $photoaccid): self
    {
        $this->photoaccid = $photoaccid;

        return $this;
    }

    public function getDescriptiondegat(): ?string
    {
        return $this->descriptiondegat;
    }

    public function setDescriptiondegat(string $descriptiondegat): self
    {
        $this->descriptiondegat = $descriptiondegat;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getNumcontratE(): ?string
    {
        return $this->numcontrat_e;
    }

    public function setNumcontratE(?string $numcontrat_e): self
    {
        $this->numcontrat_e = $numcontrat_e;

        return $this;
    }

    public function getIdExpert(): ?User
    {
        return $this->id_expert;
    }

    public function setIdExpert(?User $id_expert): self
    {
        $this->id_expert = $id_expert;

        return $this;
    }

    public function getIdVehicule(): ?Vehicule
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(?Vehicule $id_vehicule): self
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }
    
    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->Date_creation;
    }

    public function setDateCreation(\DateTime $Date_creation): self
    {
        $this->Date_creation = $Date_creation;

        return $this;
    }

    public function getSignatureId(): ?string
    {
        return $this->signatureId;
    }

    public function setSignatureId(?string $signatureId): self
    {
        $this->signatureId = $signatureId;

        return $this;
    }

    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }

    public function setDocumentId(?string $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }

    public function getSignerId(): ?string
    {
        return $this->signerId;
    }

    public function setSignerId(?string $signerId): self
    {
        $this->signerId = $signerId;

        return $this;
    }

    public function getPdfSansSignature(): ?string
    {
        return $this->PdfSansSignature;
    }

    public function setPdfSansSignature(?string $PdfSansSignature): self
    {
        $this->PdfSansSignature = $PdfSansSignature;

        return $this;
    }

    public function __toString()
    {       
      return (string) $this->getId();
    }

}
