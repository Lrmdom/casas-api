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
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
/**
 * ReservaPayment
 *
 * @ORM\Table (name="reserva_payment")
 * @ORM\Entity
 */
#[ApiResource]
class ReservaPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="leo", type="integer", nullable=false)
     */
    private $leo;
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
     * @ORM\Column(name="id_pagamento", type="string", length=20, nullable=false)
     */
    private $idPagamento;
    /**
     * @var string
     *
     * @ORM\Column(name="id_tipo_pagamento", type="string", length=25, nullable=false)
     */
    private $idTipoPagamento;
    /**
     * @var int
     *
     * @ORM\Column(name="valor", type="integer", nullable=false)
     */
    private $valor;
    /**
     * @var int
     *
     * @ORM\Column(name="idpreco", type="integer", nullable=false)
     */
    private $idpreco;
    /**
     * @var int
     *
     * @ORM\Column(name="idreserva", type="integer", nullable=false)
     */
    private $idreserva;
    /**
     * @var DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $data = 'CURRENT_TIMESTAMP';
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getIdPagamento() : ?string
    {
        return $this->idPagamento;
    }
    public function setIdPagamento(string $idPagamento) : self
    {
        $this->idPagamento = $idPagamento;
        return $this;
    }
    public function getIdTipoPagamento() : ?string
    {
        return $this->idTipoPagamento;
    }
    public function setIdTipoPagamento(string $idTipoPagamento) : self
    {
        $this->idTipoPagamento = $idTipoPagamento;
        return $this;
    }
    public function getValor() : ?int
    {
        return $this->valor;
    }
    public function setValor(int $valor) : self
    {
        $this->valor = $valor;
        return $this;
    }
    public function getIdpreco() : ?int
    {
        return $this->idpreco;
    }
    public function setIdpreco(int $idpreco) : self
    {
        $this->idpreco = $idpreco;
        return $this;
    }
    public function getIdreserva() : ?int
    {
        return $this->idreserva;
    }
    public function setIdreserva(int $idreserva) : self
    {
        $this->idreserva = $idreserva;
        return $this;
    }
    public function getData() : ?DateTimeInterface
    {
        return $this->data;
    }
    public function setData(DateTimeInterface $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
