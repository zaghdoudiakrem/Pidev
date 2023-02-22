<?php

namespace App\Entity;

use App\Repository\UserRepository;
<<<<<<< HEAD
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

=======
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $num_tel = null;

    #[ORM\Column(length: 255)]
    private ?string $cin = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

=======
    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $mdp = null;

    #[ORM\Column]
    private ?int $cin = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Reponse::class)]
    private Collection $reponses;

    #[ORM\OneToMany(mappedBy: 'id_client', targetEntity: Reclamation::class)]
    private Collection $reclamations;

    #[ORM\OneToMany(mappedBy: 'id_client', targetEntity: Vehicule::class)]
    private Collection $vehicules;

    #[ORM\OneToMany(mappedBy: 'id_client', targetEntity: Contrat::class)]
    private Collection $contrats;

    #[ORM\OneToMany(mappedBy: 'id_client', targetEntity: RendezVous::class)]
    private Collection $rendezVouses;

    #[ORM\OneToMany(mappedBy: 'id_mecanicien', targetEntity: Locale::class)]
    private Collection $locales;

    #[ORM\OneToMany(mappedBy: 'id_mecanicien', targetEntity: Devis::class)]
    private Collection $devis;

    #[ORM\OneToMany(mappedBy: 'id_expert', targetEntity: Constat::class)]
    private Collection $constats;

    #[ORM\OneToMany(mappedBy: 'id_expert', targetEntity: Rapport::class)]
    private Collection $rapports;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
        $this->reclamations = new ArrayCollection();
        $this->vehicules = new ArrayCollection();
        $this->contrats = new ArrayCollection();
        $this->rendezVouses = new ArrayCollection();
        $this->locales = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->constats = new ArrayCollection();
        $this->rapports = new ArrayCollection();
    }

>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

=======
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

<<<<<<< HEAD
    public function getNumTel(): ?string
=======
    public function getNumTel(): ?int
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        return $this->num_tel;
    }

<<<<<<< HEAD
    public function setNumTel(string $num_tel): self
=======
    public function setNumTel(int $num_tel): self
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        $this->num_tel = $num_tel;

        return $this;
    }

<<<<<<< HEAD
    public function getCin(): ?string
=======
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getCin(): ?int
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        return $this->cin;
    }

<<<<<<< HEAD
    public function setCin(string $cin): self
=======
    public function setCin(int $cin): self
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        $this->cin = $cin;

        return $this;
    }

<<<<<<< HEAD
=======
    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

<<<<<<< HEAD
    public function setAdresse(string $adresse): self
=======
    public function setAdresse(?string $adresse): self
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
    {
        $this->adresse = $adresse;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setIdUser($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getIdUser() === $this) {
                $reponse->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setIdClient($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getIdClient() === $this) {
                $reclamation->setIdClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setIdClient($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): self
    {
        if ($this->vehicules->removeElement($vehicule)) {
            // set the owning side to null (unless already changed)
            if ($vehicule->getIdClient() === $this) {
                $vehicule->setIdClient(null);
            }
        }

        return $this;
    }

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
            $contrat->setIdClient($this);
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        if ($this->contrats->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getIdClient() === $this) {
                $contrat->setIdClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RendezVous>
     */
    public function getRendezVouses(): Collection
    {
        return $this->rendezVouses;
    }

    public function addRendezVouse(RendezVous $rendezVouse): self
    {
        if (!$this->rendezVouses->contains($rendezVouse)) {
            $this->rendezVouses->add($rendezVouse);
            $rendezVouse->setIdClient($this);
        }

        return $this;
    }

    public function removeRendezVouse(RendezVous $rendezVouse): self
    {
        if ($this->rendezVouses->removeElement($rendezVouse)) {
            // set the owning side to null (unless already changed)
            if ($rendezVouse->getIdClient() === $this) {
                $rendezVouse->setIdClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Locale>
     */
    public function getLocales(): Collection
    {
        return $this->locales;
    }

    public function addLocale(Locale $locale): self
    {
        if (!$this->locales->contains($locale)) {
            $this->locales->add($locale);
            $locale->setIdMecanicien($this);
        }

        return $this;
    }

    public function removeLocale(Locale $locale): self
    {
        if ($this->locales->removeElement($locale)) {
            // set the owning side to null (unless already changed)
            if ($locale->getIdMecanicien() === $this) {
                $locale->setIdMecanicien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Devis>
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis->add($devi);
            $devi->setIdMecanicien($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getIdMecanicien() === $this) {
                $devi->setIdMecanicien(null);
            }
        }

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
            $constat->setIdExpert($this);
        }

        return $this;
    }

    public function removeConstat(Constat $constat): self
    {
        if ($this->constats->removeElement($constat)) {
            // set the owning side to null (unless already changed)
            if ($constat->getIdExpert() === $this) {
                $constat->setIdExpert(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Rapport>
     */
    public function getRapports(): Collection
    {
        return $this->rapports;
    }

    public function addRapport(Rapport $rapport): self
    {
        if (!$this->rapports->contains($rapport)) {
            $this->rapports->add($rapport);
            $rapport->setIdExpert($this);
        }

        return $this;
    }

    public function removeRapport(Rapport $rapport): self
    {
        if ($this->rapports->removeElement($rapport)) {
            // set the owning side to null (unless already changed)
            if ($rapport->getIdExpert() === $this) {
                $rapport->setIdExpert(null);
            }
        }

        return $this;
    }
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
}
