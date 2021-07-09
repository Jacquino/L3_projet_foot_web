<?php

namespace App\Entity;

use App\Repository\FootballMatchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FootballMatchRepository::class)
 */
class FootballMatch
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Teams::class, cascade={"persist", "remove"})
     */
    private $teams;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity=Scores::class, cascade={"persist", "remove"})
     */
    private $scores;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeams(): ?Teams
    {
        return $this->teams;
    }

    public function setTeams(?Teams $teams): self
    {
        $this->teams = $teams;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getScores(): ?Scores
    {
        return $this->scores;
    }

    public function setScores(?Scores $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
