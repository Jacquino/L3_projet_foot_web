<?php

namespace App\Entity;

use App\Repository\ScoresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoresRepository::class)
 */
class Scores
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $domicile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exterieur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tireaubut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $winner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomicile(): ?int
    {
        return $this->domicile;
    }

    public function setDomicile(?int $domicile): self
    {
        $this->domicile = $domicile;

        return $this;
    }

    public function getExterieur(): ?int
    {
        return $this->exterieur;
    }

    public function setExterieur(?int $exterieur): self
    {
        $this->exterieur = $exterieur;

        return $this;
    }

    public function getTireaubut(): ?bool
    {
        return $this->tireaubut;
    }

    public function setTireaubut(?bool $tireaubut): self
    {
        $this->tireaubut = $tireaubut;

        return $this;
    }

    public function getWinner(): ?string
    {
        return $this->winner;
    }

    public function setWinner(?string $winner): self
    {
        $this->winner = $winner;

        return $this;
    }
}
