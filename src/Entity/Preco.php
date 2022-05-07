<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Preco
 *
 * @ORM\Table(name="preco")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Preco
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
     * @var int|null
     *
     * @ORM\Column(name="ano", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ano = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nm_mes", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nmMes = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_semana", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nSemana = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cod_casa", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $codCasa = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inicio", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $inicio = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fim", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $fim = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="preco", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $preco = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="livre", type="boolean", nullable=true, options={"default"=0})
     */
    private $livre = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reservar", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $reservar = 'NULL';

    /**
     * @var bool|0
     *
     * @ORM\Column(name="promo", type="boolean", nullable=true, options={"default"=0})
     */
    private $promo = 0;

    /**
     * @var bool|0
     *
     * @ORM\Column(name="paga", type="boolean", nullable=true, options={"default"=0})
     */
    private $paga = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAno(): ?int
    {
        return $this->ano;
    }

    public function setAno(?int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    public function getNmMes(): ?string
    {
        return $this->nmMes;
    }

    public function setNmMes(?string $nmMes): self
    {
        $this->nmMes = $nmMes;

        return $this;
    }

    public function getNSemana(): ?int
    {
        return $this->nSemana;
    }

    public function setNSemana(?int $nSemana): self
    {
        $this->nSemana = $nSemana;

        return $this;
    }

    public function getCodCasa(): ?int
    {
        return $this->codCasa;
    }

    public function setCodCasa(?int $codCasa): self
    {
        $this->codCasa = $codCasa;

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

    public function getPreco(): ?string
    {
        return $this->preco;
    }

    public function setPreco(?string $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getLivre(): ?bool
    {
        return $this->livre;
    }

    public function setLivre(?bool $livre): self
    {
        $this->livre = $livre;

        return $this;
    }

    public function getReservar(): ?string
    {
        return $this->reservar;
    }

    public function setReservar(?string $reservar): self
    {
        $this->reservar = $reservar;

        return $this;
    }

    public function getPromo(): ?bool
    {
        return $this->promo;
    }

    public function setPromo(?bool $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getPaga(): ?bool
    {
        return $this->paga;
    }

    public function setPaga(?bool $paga): self
    {
        $this->paga = $paga;

        return $this;
    }


}
