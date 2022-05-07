<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Destino
 *
 * @ORM\Table(name="destino")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
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

    public function getIdDestino(): ?int
    {
        return $this->idDestino;
    }

    public function getDestino(): ?string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): self
    {
        $this->destino = $destino;

        return $this;
    }


}
