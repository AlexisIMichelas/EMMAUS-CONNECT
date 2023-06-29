<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IMEI = null;

    #[ORM\Column(length: 50)]
    private ?string $Marque = null;

    #[ORM\Column(length: 50)]
    private ?string $Modele = null;

    #[ORM\Column]
    private ?int $RAM = null;

    #[ORM\Column]
    private ?int $Antutu = null;

    #[ORM\Column]
    private ?int $Ponderation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIMEI(): ?int
    {
        return $this->IMEI;
    }

    public function setIMEI(int $IMEI): self
    {
        $this->IMEI = $IMEI;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->Modele;
    }

    public function setModele(string $Modele): self
    {
        $this->Modele = $Modele;

        return $this;
    }

    public function getRAM(): ?int
    {
        return $this->RAM;
    }

    public function setRAM(int $RAM): self
    {
        $this->RAM = $RAM;

        return $this;
    }

    public function getAntutu(): ?int
    {
        return $this->Antutu;
    }

    public function setAntutu(int $Antutu): self
    {
        $this->Antutu = $Antutu;

        return $this;
    }

    public function getPonderation(): ?int
    {
        return $this->Ponderation;
    }

    public function setPonderation(int $Ponderation): self
    {
        $this->Ponderation = $Ponderation;

        return $this;
    }
}
