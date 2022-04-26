<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * TipoAlojamento
 *
 * @ORM\Table(name="tipo_alojamento")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
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

    public function getIdTipoAlojamento(): ?int
    {
        return $this->idTipoAlojamento;
    }

    public function getTipoAlojamento(): ?string
    {
        return $this->tipoAlojamento;
    }

    public function setTipoAlojamento(string $tipoAlojamento): self
    {
        $this->tipoAlojamento = $tipoAlojamento;

        return $this;
    }


}
