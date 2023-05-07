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
 * TipoAlojamento
 *
 * @ORM\Table (name="tipo_alojamento")
 * @ORM\Entity
 */
#[ApiResource]
class TipoAlojamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_alojamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoAlojamento;
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_alojamento", type="string", length=50, nullable=false)
     */
    private $tipoAlojamento;
    public function getIdTipoAlojamento() : ?int
    {
        return $this->idTipoAlojamento;
    }
    public function getTipoAlojamento() : ?string
    {
        return $this->tipoAlojamento;
    }
    public function setTipoAlojamento(string $tipoAlojamento) : self
    {
        $this->tipoAlojamento = $tipoAlojamento;
        return $this;
    }
}
