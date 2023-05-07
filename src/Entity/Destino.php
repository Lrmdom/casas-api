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
 * Destino
 *
 * @ORM\Table (name="destino")
 * @ORM\Entity
 */
#[ApiResource]
class Destino
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_destino", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDestino;
    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=30, nullable=false)
     */
    private $destino;
    public function getIdDestino() : ?int
    {
        return $this->idDestino;
    }
    public function getDestino() : ?string
    {
        return $this->destino;
    }
    public function setDestino(string $destino) : self
    {
        $this->destino = $destino;
        return $this;
    }
}
