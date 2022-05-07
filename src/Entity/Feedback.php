<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="cod_casa", columns={"cod_casa"})})
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Feedback
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
     * @var int
     *
     * @ORM\Column(name="cod_casa", type="integer", nullable=false)
     */
    private $codCasa;

    /**
     * @var int
     *
     * @ORM\Column(name="valor_voto", type="integer", nullable=false)
     */
    private $valorVoto;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=500, nullable=false)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     */
    private $idCliente;

    /**
     * @var int
     *
     * @ORM\Column(name="reserva", type="integer", nullable=false)
     */
    private $reserva;

    /**
     * @var bool
     *
     * @ORM\Column(name="revisto", type="boolean", nullable=false)
     */
    private $revisto;

    /**
     * @var bool
     *
     * @ORM\Column(name="aproved", type="boolean", nullable=false)
     */
    private $aproved;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodCasa(): ?int
    {
        return $this->codCasa;
    }

    public function setCodCasa(int $codCasa): self
    {
        $this->codCasa = $codCasa;

        return $this;
    }

    public function getValorVoto(): ?int
    {
        return $this->valorVoto;
    }

    public function setValorVoto(int $valorVoto): self
    {
        $this->valorVoto = $valorVoto;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getIdCliente(): ?int
    {
        return $this->idCliente;
    }

    public function setIdCliente(int $idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    public function getReserva(): ?int
    {
        return $this->reserva;
    }

    public function setReserva(int $reserva): self
    {
        $this->reserva = $reserva;

        return $this;
    }

    public function getRevisto(): ?bool
    {
        return $this->revisto;
    }

    public function setRevisto(bool $revisto): self
    {
        $this->revisto = $revisto;

        return $this;
    }

    public function getAproved(): ?bool
    {
        return $this->aproved;
    }

    public function setAproved(bool $aproved): self
    {
        $this->aproved = $aproved;

        return $this;
    }


}
