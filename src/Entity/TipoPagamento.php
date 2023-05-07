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
 * TipoPagamento
 *
 * @ORM\Table (name="tipo_pagamento")
 * @ORM\Entity
 */
#[ApiResource]
class TipoPagamento
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
     * @ORM\Column(name="tipo_pagamento", type="string", length=20, nullable=false)
     */
    private $tipoPagamento;
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getTipoPagamento() : ?string
    {
        return $this->tipoPagamento;
    }
    public function setTipoPagamento(string $tipoPagamento) : self
    {
        $this->tipoPagamento = $tipoPagamento;
        return $this;
    }
}
