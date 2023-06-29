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
    private ?int $imei = null;

    #[ORM\Column(length: 50)]
    private ?string $marque = null;

    #[ORM\Column(length: 50)]
    private ?string $modele = null;

    #[ORM\Column]
    private ?int $ram = null;

    #[ORM\Column]
    private ?int $antutu = null;

    #[ORM\Column]
    private ?int $ponderation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImei(): ?int
    {
        return $this->imei;
    }

    public function setImei(int $imei): self
    {
        $this->imei = $imei;

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

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getRam(): ?int
    {
        return $this->ram;
    }

    public function setRam(int $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getAntutu(): ?int
    {
        return $this->antutu;
    }

    public function setAntutu(int $antutu): self
    {
        $this->antutu = $antutu;

        return $this;
    }

    public function getPonderation(): ?int
    {
        return $this->ponderation;
    }

    public function setPonderation(int $ponderation): self
    {
        $this->ponderation = $ponderation;

        return $this;
    }
}
