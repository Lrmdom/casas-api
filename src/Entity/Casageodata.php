<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Casageodata
 *
 * @ORM\Table(name="casageodata")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Casageodata
{
    /**
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casageodata")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $casa;

    /**
     * @var string|null
     * @ORM\Column(name="cod_casa", type="integer",  nullable=true, options={"default"="NULL"})
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casageodata")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $codCasa = 'NULL';
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string|null
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $pais = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="distrito", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $distrito = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="endereco", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $endereco = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="codpostal", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $codpostal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $lat = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="lng", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $lng = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="altitude", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $altitude = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="localidade", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $localidade = 'NULL';
    /**
     * @var bool|0
     *
     * @ORM\Column(name="concelho", type="string", length=45, nullable=true, options={"default"=0})
     */
    private $concelho = 'NULL';

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getConcelho(): ?string
    {
        return $this->concelho;
    }

    public function setConcelho(?string $concelho): self
    {
        $this->concelho = $concelho;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(?string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(?string $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getLocalidade(): ?string
    {
        return $this->localidade;
    }

    public function setLocalidade(?string $localidade): self
    {
        $this->localidade = $localidade;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getDistrito(): ?string
    {
        return $this->distrito;
    }

    public function setDistrito(?string $distrito): self
    {
        $this->distrito = $distrito;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCodpostal(): ?string
    {
        return $this->codpostal;
    }

    public function setCodpostal(?string $codpostal): self
    {
        $this->codpostal = $codpostal;

        return $this;
    }
}