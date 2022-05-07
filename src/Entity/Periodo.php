<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Periodo
 *
 * @ORM\Table(name="periodo")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Periodo
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
     * @var string
     *
     * @ORM\Column(name="inicio", type="string", length=45, nullable=false)
     */
    private $inicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fim", type="string", length=45, nullable=false)
     */
    private $fim;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_semana", type="string", length=45, nullable=false)
     */
    private $precoSemana;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_dia", type="string", length=45, nullable=false)
     */
    private $precoDia;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_fimsemana", type="string", length=45, nullable=false)
     */
    private $precoFimsemana;

    /**
     * @var string
     *
     * @ORM\Column(name="estadia_minima", type="string", length=20, nullable=false)
     */
    private $estadiaMinima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $descricao = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="string", length=300, nullable=false)
     */
    private $observacoes;

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

    public function getInicio(): ?string
    {
        return $this->inicio;
    }

    public function setInicio(string $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    public function getFim(): ?string
    {
        return $this->fim;
    }

    public function setFim(string $fim): self
    {
        $this->fim = $fim;

        return $this;
    }

    public function getPrecoSemana(): ?string
    {
        return $this->precoSemana;
    }

    public function setPrecoSemana(string $precoSemana): self
    {
        $this->precoSemana = $precoSemana;

        return $this;
    }

    public function getPrecoDia(): ?string
    {
        return $this->precoDia;
    }

    public function setPrecoDia(string $precoDia): self
    {
        $this->precoDia = $precoDia;

        return $this;
    }

    public function getPrecoFimsemana(): ?string
    {
        return $this->precoFimsemana;
    }

    public function setPrecoFimsemana(string $precoFimsemana): self
    {
        $this->precoFimsemana = $precoFimsemana;

        return $this;
    }

    public function getEstadiaMinima(): ?string
    {
        return $this->estadiaMinima;
    }

    public function setEstadiaMinima(string $estadiaMinima): self
    {
        $this->estadiaMinima = $estadiaMinima;

        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getObservacoes(): ?string
    {
        return $this->observacoes;
    }

    public function setObservacoes(string $observacoes): self
    {
        $this->observacoes = $observacoes;

        return $this;
    }


}
