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
 * Visita
 *
 * @ORM\Table (name="visita")
 * @ORM\Entity
 */
#[ApiResource]
class Visita
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
     * @ORM\Column(name="cliente", type="integer", nullable=false)
     */
    private $cliente;
    /**
     * @var int
     *
     * @ORM\Column(name="cod_casa", type="integer", nullable=false)
     */
    private $codCasa;
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=12, nullable=false)
     */
    private $data;
    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=10, nullable=false)
     */
    private $hora;
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getCliente() : ?int
    {
        return $this->cliente;
    }
    public function setCliente(int $cliente) : self
    {
        $this->cliente = $cliente;
        return $this;
    }
    public function getCodCasa() : ?int
    {
        return $this->codCasa;
    }
    public function setCodCasa(int $codCasa) : self
    {
        $this->codCasa = $codCasa;
        return $this;
    }
    public function getData() : ?string
    {
        return $this->data;
    }
    public function setData(string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    public function getHora() : ?string
    {
        return $this->hora;
    }
    public function setHora(string $hora) : self
    {
        $this->hora = $hora;
        return $this;
    }
}
