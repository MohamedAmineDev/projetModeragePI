<?php

namespace App\Entity;

use App\Repository\EnqueteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnqueteurRepository::class)
 */
class Enqueteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matriculeFiscale;

    /**
     * @ORM\Column(type="blob")
     */
    private $registreDesCommeerces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseSociete;

    /**
     * @ORM\Column(type="blob")
     */
    private $logo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $genre;

    /**
     * @ORM\Column(type="integer")
     */
    private $cin;

    public function getId(): ?int
    {
        return $this->id;
    }

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

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getMatriculeFiscale(): ?string
    {
        return $this->matriculeFiscale;
    }

    public function setMatriculeFiscale(string $matriculeFiscale): self
    {
        $this->matriculeFiscale = $matriculeFiscale;

        return $this;
    }

    public function getRegistreDesCommeerces()
    {
        return $this->registreDesCommeerces;
    }

    public function setRegistreDesCommeerces($registreDesCommeerces): self
    {
        $this->registreDesCommeerces = $registreDesCommeerces;

        return $this;
    }

    public function getAdresseSociete(): ?string
    {
        return $this->adresseSociete;
    }

    public function setAdresseSociete(string $adresseSociete): self
    {
        $this->adresseSociete = $adresseSociete;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getGenre(): ?bool
    {
        return $this->genre;
    }

    public function setGenre(bool $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
    

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }
    
    public function __toString()
    {
        return (string) $this->getid();
    }
}
