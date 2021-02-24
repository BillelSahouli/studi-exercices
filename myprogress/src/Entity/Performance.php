<?php

namespace App\Entity;

use App\Repository\PerformanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PerformanceRepository::class)
 */
class Performance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $weight;

    /**
     * @ORM\Column(type="integer")
     */
    private $repetition;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="performance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Exercice::class, inversedBy="performances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exercice;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getRepetition(): ?int
    {
        return $this->repetition;
    }

    public function setRepetition(int $repetition): self
    {
        $this->repetition = $repetition;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getExercice(): ?exercice
    {
        return $this->exercice;
    }

    public function setExercice(?exercice $exercice): self
    {
        $this->exercice = $exercice;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
