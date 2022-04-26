<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * PeriodoLongo
 *
 * @ORM\Table(name="periodo_longo", indexes={@ORM\Index(name="cod_casa", columns={"cod_casa"})})
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class PeriodoLongo
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
     * @ORM\Column(name="inicio", type="string", length=12, nullable=false)
     */
    private $inicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fim", type="string", length=12, nullable=false)
     */
    private $fim;

    /**
     * @var int
     *
     * @ORM\Column(name="preco_mes", type="integer", nullable=false)
     */
    private $precoMes;

    /**
     * @var string
     *
     * @ORM\Column(name="estadia_minima", type="string", length=50, nullable=false)
     */
    private $estadiaMinima;

    /**
     * @var \Casa
     *
     * @ORM\ManyToOne(targetEntity="Casa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_casa", referencedColumnName="cod_casa")
     * })
     */
    private $codCasa;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrecoMes(): ?int
    {
        return $this->precoMes;
    }

    public function setPrecoMes(int $precoMes): self
    {
        $this->precoMes = $precoMes;

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

    public function getCodCasa(): ?Casa
    {
        return $this->codCasa;
    }

    public function setCodCasa(?Casa $codCasa): self
    {
        $this->codCasa = $codCasa;

        return $this;
    }


}
