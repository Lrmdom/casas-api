<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Tipo
 *
 * @ORM\Table(name="tipo")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Tipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=false)
     */
    private $tipo;

    public function getIdTipo(): ?int
    {
        return $this->idTipo;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


}
