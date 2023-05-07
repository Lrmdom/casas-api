<?php

namespace App\Entity;

use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiFilter;
use Doctrine\ORM\Mapping as ORM;
/**
 * EstadiaMinima
 *
 * @ORM\Table (name="estadia_minima")
 * @ORM\Entity
 */
#[ApiResource]
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
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getEstadiaMin() : ?string
    {
        return $this->estadiaMin;
    }
    public function setEstadiaMin(string $estadiaMin) : self
    {
        $this->estadiaMin = $estadiaMin;
        return $this;
    }
}
