<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorierec",inversedBy="reclamation")
     */
    private $categorierec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorierec(): ?Categorierec
    {
        return $this->categorierec;
    }

    public function setCategorierec(?Categorierec $categorierec): self
    {
        $this->categorierec = $categorierec;

        return $this;
    }
}
