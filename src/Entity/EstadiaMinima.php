<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * EstadiaMinima
 *
 * @ORM\Table(name="estadia_minima")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class EstadiaMinima
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="estadia_min", type="string", length=30, nullable=false)
     */
    private $estadiaMin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstadiaMin(): ?string
    {
        return $this->estadiaMin;
    }

    public function setEstadiaMin(string $estadiaMin): self
    {
        $this->estadiaMin = $estadiaMin;

        return $this;
    }


}
