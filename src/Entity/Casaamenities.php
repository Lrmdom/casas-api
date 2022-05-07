<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Casaamenities
 *
 * @ORM\Table(name="casaamenities")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Casaamenities
{
    /**
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casaamenities")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $casa;
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
     * @ORM\Column(name="cod_casa", type="integer",  nullable=true, options={"default"="NULL"})
     * @ORM\OneToOne(targetEntity=Casa::class, inversedBy="casaamenities")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    #[Groups(['casa'])]
    private $codCasa = 'NULL';


    /**
     * @var int|null
     *
     * @ORM\Column(name="quartos", type="integer", nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
    private $quartos = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="camascasal", type="integer", nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
    private $camascasal = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="camassingle", type="integer", nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
    private $camassingle = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="casasbanho", type="integer", nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
    private $casasbanho = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="animais", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $animais = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="fumadores", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $fumadores = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="deficientes", type="string", length=45, nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $deficientes = 0;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->lat = $id;

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

    public function getQuartos(): ?int
    {
        return $this->quartos;
    }

    public function setQuartos(?int $quartos): self
    {
        $this->quartos = $quartos;

        return $this;
    }

    public function getCamascasal(): ?int
    {
        return $this->camascasal;
    }

    public function setCamascasal(?int $camascasal): self
    {
        $this->camascasal = $camascasal;

        return $this;
    }

    public function getCamassingle(): ?int
    {
        return $this->camassingle;
    }

    public function setCamassingle(?int $camassingle): self
    {
        $this->camassingle = $camassingle;

        return $this;
    }

    public function getCasasbanho(): ?int
    {
        return $this->casasbanho;
    }

    public function setCasasbanho(?int $casasbanho): self
    {
        $this->casasbanho = $casasbanho;

        return $this;
    }

    public function getAnimais(): ?bool
    {
        return $this->animais;
    }

    public function setAnimais(?bool $animais): self
    {
        $this->animais = $animais;

        return $this;
    }

    public function getFumadores(): ?bool
    {
        return $this->fumadores;
    }

    public function setFumadores(?bool $fumadores): self
    {
        $this->fumadores = $fumadores;

        return $this;
    }

    public function getDeficientes(): ?string
    {
        return $this->deficientes;
    }

    public function setDeficientes(?string $deficientes): self
    {
        $this->deficientes = $deficientes;

        return $this;
    }

    public function getCasa()
    {
        return $this->casa;
    }

    public function setCasa($casa)
    {
        $this->casa = $casa;
    }
}