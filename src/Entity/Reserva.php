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
 * Reserva
 *
 * @ORM\Table (name="reserva")
 * @ORM\Entity
 */
#[ApiResource]
class Reserva
{
    /**
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="reservas")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=true,name="casa")
     */
    private $casa;
    /**
     * @var int|null
     * @ORM\Column(name="cod_casa", type="integer", nullable=true,options={"default"= 23})
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="reservas")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=true,name="codCasa")
     */
    private $codCasa = 23;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var int|null
     *
     * @ORM\Column(name="n_prereserva", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nPrereserva = 'NULL';
    /**
     * @var bool|0
     *
     * @ORM\Column(name="reservado", type="boolean", nullable=true, options={"default"=0})
     */
    private $reservado = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="valor", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $valor = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="n_cheque", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nCheque = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="valorSinal", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $valorsinal = 'NULL';
    /**
     * @var int
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     */
    private $idcliente;
    /**
     * @var int
     *
     * @ORM\Column(name="idpreco", type="integer", nullable=false)
     */
    private $idpreco;
    /**
     * @var int|null
     *
     * @ORM\Column(name="tipopagamento", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tipopagamento = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="n_pagamento", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nPagamento = NULL;
    /**
     * @var int
     *
     * @ORM\Column(name="reserva_state", type="integer", nullable=false)
     */
    private $reservaState;
    /**
     * @var DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $data = 'CURRENT_TIMESTAMP';
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50, nullable=false, options={"default"="'User'"})
     */
    private $user = '\'User\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="eventid", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $eventid = 'NULL';
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getNPrereserva() : ?int
    {
        return $this->nPrereserva;
    }
    public function setNPrereserva(?int $nPrereserva) : self
    {
        $this->nPrereserva = $nPrereserva;
        return $this;
    }
    public function getReservado() : ?bool
    {
        return $this->reservado;
    }
    public function setReservado(?bool $reservado) : self
    {
        $this->reservado = $reservado;
        return $this;
    }
    public function getValor() : ?string
    {
        return $this->valor;
    }
    public function setValor(?string $valor) : self
    {
        $this->valor = $valor;
        return $this;
    }
    public function getNCheque() : ?string
    {
        return $this->nCheque;
    }
    public function setNCheque(?string $nCheque) : self
    {
        $this->nCheque = $nCheque;
        return $this;
    }
    public function getValorsinal() : ?string
    {
        return $this->valorsinal;
    }
    public function setValorsinal(?string $valorsinal) : self
    {
        $this->valorsinal = $valorsinal;
        return $this;
    }
    public function getIdcliente() : ?int
    {
        return $this->idcliente;
    }
    public function setIdcliente(int $idcliente) : self
    {
        $this->idcliente = $idcliente;
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
    public function getTipopagamento() : ?int
    {
        return $this->tipopagamento;
    }
    public function setTipopagamento(?int $tipopagamento) : self
    {
        $this->tipopagamento = $tipopagamento;
        return $this;
    }
    public function getNPagamento() : ?int
    {
        return $this->nPagamento;
    }
    public function setNPagamento(?int $nPagamento) : self
    {
        $this->nPagamento = $nPagamento;
        return $this;
    }
    public function getReservaState() : ?int
    {
        return $this->reservaState;
    }
    public function setReservaState(int $reservaState) : self
    {
        $this->reservaState = $reservaState;
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
    public function getUser() : ?string
    {
        return $this->user;
    }
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    public function getEventid() : ?string
    {
        return $this->eventid;
    }
    public function setEventid(?string $eventid) : self
    {
        $this->eventid = $eventid;
        return $this;
    }
    public function getReservas() : ?Reserva
    {
        return $this->reservas;
    }
    public function setReservas(?Reserva $reservas) : self
    {
        $this->reservas = $reservas;
        return $this;
    }
    public function getCasa()
    {
        return $this->casa;
    }
    public function getCodCasa() : ?string
    {
        return $this->codCasa;
    }
    public function setCodCasa(?string $codCasa) : self
    {
        $this->codCasa = $codCasa;
        return $this;
    }
}
