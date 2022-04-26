<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Alert
 *
 * @ORM\Table(name="alert")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Alert
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
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tipo_alojamento", type="string", length=20, nullable=false)
     */
    private $idTipoAlojamento;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tipo", type="string", length=20, nullable=false)
     */
    private $idTipo;

    /**
     * @var int
     *
     * @ORM\Column(name="valor", type="integer", nullable=false)
     */
    private $valor;

    /**
     * @var int
     *
     * @ORM\Column(name="pessoas", type="integer", nullable=false)
     */
    private $pessoas;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=20, nullable=false)
     */
    private $destino;

    /**
     * @var bool
     *
     * @ORM\Column(name="for_rent", type="boolean", nullable=false)
     */
    private $forRent;

    /**
     * @var bool
     *
     * @ORM\Column(name="for_sale", type="boolean", nullable=false)
     */
    private $forSale;

    /**
     * @var bool
     *
     * @ORM\Column(name="for_arrenda", type="boolean", nullable=false)
     */
    private $forArrenda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_arrenda", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valorArrenda = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_venda", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valorVenda = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_rent", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valorRent = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inicio", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $inicio = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fim", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $fim = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdTipoAlojamento(): ?string
    {
        return $this->idTipoAlojamento;
    }

    public function setIdTipoAlojamento(string $idTipoAlojamento): self
    {
        $this->idTipoAlojamento = $idTipoAlojamento;

        return $this;
    }

    public function getIdTipo(): ?string
    {
        return $this->idTipo;
    }

    public function setIdTipo(string $idTipo): self
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getPessoas(): ?int
    {
        return $this->pessoas;
    }

    public function setPessoas(int $pessoas): self
    {
        $this->pessoas = $pessoas;

        return $this;
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

    public function getForRent(): ?bool
    {
        return $this->forRent;
    }

    public function setForRent(bool $forRent): self
    {
        $this->forRent = $forRent;

        return $this;
    }

    public function getForSale(): ?bool
    {
        return $this->forSale;
    }

    public function setForSale(bool $forSale): self
    {
        $this->forSale = $forSale;

        return $this;
    }

    public function getForArrenda(): ?bool
    {
        return $this->forArrenda;
    }

    public function setForArrenda(bool $forArrenda): self
    {
        $this->forArrenda = $forArrenda;

        return $this;
    }

    public function getValorArrenda(): ?int
    {
        return $this->valorArrenda;
    }

    public function setValorArrenda(?int $valorArrenda): self
    {
        $this->valorArrenda = $valorArrenda;

        return $this;
    }

    public function getValorVenda(): ?int
    {
        return $this->valorVenda;
    }

    public function setValorVenda(?int $valorVenda): self
    {
        $this->valorVenda = $valorVenda;

        return $this;
    }

    public function getValorRent(): ?int
    {
        return $this->valorRent;
    }

    public function setValorRent(?int $valorRent): self
    {
        $this->valorRent = $valorRent;

        return $this;
    }

    public function getInicio(): ?string
    {
        return $this->inicio;
    }

    public function setInicio(?string $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    public function getFim(): ?string
    {
        return $this->fim;
    }

    public function setFim(?string $fim): self
    {
        $this->fim = $fim;

        return $this;
    }


}
