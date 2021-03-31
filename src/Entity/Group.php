<?php

namespace App\Entity;

use App\Repository\GroupRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GroupRepository::class)
 * @ORM\Table(name="`group`")
 */
class Group
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="nom is required")
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="lieu is required")
     */
    private $lieu;

    /**
     * @ORM\Column(type="date", nullable=true)
     * * @Assert\NotBlank(message="date is required")
     */
    private $date_group;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoriegr",inversedBy="group")
     */
    private $categoriegr;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateGroup(): ?\DateTimeInterface
    {
        return $this->date_group;
    }

    public function setDateGroup(?\DateTimeInterface $date_group): self
    {
        $this->date_group = $date_group;

        return $this;
    }

    public function getCategoriegr(): ?Categoriegr
    {
        return $this->categoriegr;
    }

    public function setCategoriegr(?Categoriegr $categoriegr): self
    {
        $this->categoriegr = $categoriegr;

        return $this;
    }
}
