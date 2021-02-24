<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 */
class Exercice
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $illustration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Muscle::class, inversedBy="exercices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $muscle;

    /**
     * @ORM\OneToMany(targetEntity=Performance::class, mappedBy="exercice")
     */
    private $performances;

    public function __construct()
    {
        $this->performances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this -> id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): self
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

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

    public function getMuscle(): ?Muscle
    {
        return $this->muscle;
    }

    public function setMuscle(?Muscle $muscle): self
    {
        $this->muscle = $muscle;

        return $this;
    }

    /**
     * @return Collection|Performance[]
     */
    public function getPerformances(): Collection
    {
        return $this->performances;
    }

    public function addPerformance(Performance $performance): self
    {
        if (!$this->performances->contains($performance)) {
            $this->performances[] = $performance;
            $performance->setExercice($this);
        }

        return $this;
    }

    public function removePerformance(Performance $performance): self
    {
        if ($this->performances->removeElement($performance)) {
            // set the owning side to null (unless already changed)
            if ($performance->getExercice() === $this) {
                $performance->setExercice(null);
            }
        }

        return $this;
    }
}
