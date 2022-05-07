<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Casaattributes
 *
 * @ORM\Table(name="casaattributes")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Casaattributes
{
    /**
     * @ORM\OneToOne(targetEntity=Casa::class, inversedBy="casaattributes")
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
    #[Groups(['casa'])]
    private $id;
    /**
     * @var string|null
     * @ORM\Column(name="cod_casa", type="integer",  nullable=true, options={"default"="NULL"})
     * @ORM\OneToOne(targetEntity=Casa::class, inversedBy="casaattributes")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    #[Groups(['casa'])]
    private $codCasa = 'NULL';
    /**
     * @var bool|0
     *
     * @ORM\Column(name="piscina", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $piscina = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="televisao", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $televisao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="ar_condicionado", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $arCondicionado = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="roupascama", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $roupascama = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="roupasbanho", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $roupasbanho = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="limpeza", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $limpeza = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="utilcozinha", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $utilcozinha = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="fogao", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $fogao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="frigorif", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
    private $frigorif = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="congel", type="boolean", nullable=true, options={"default"=0})
     */
    private $congel = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="forno", type="boolean", nullable=true, options={"default"=0})
     */
    private $forno = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="barbecue", type="boolean", nullable=true, options={"default"=0})
     */
    private $barbecue = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="microndas", type="boolean", nullable=true, options={"default"=0})
     */
    private $microndas = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="mlavaloica", type="boolean", nullable=true, options={"default"=0})
     */
    private $mlavaloica = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="mlavaroupa", type="boolean", nullable=true, options={"default"=0})
     */
    private $mlavaroupa = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="aqcentral", type="boolean", nullable=true, options={"default"=0})
     */
    private $aqcentral = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="satcabo", type="boolean", nullable=true, options={"default"=0})
     */
    private $satcabo = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="internet", type="boolean", nullable=true, options={"default"=0})
     */
    private $internet = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="fengomar", type="boolean", nullable=true, options={"default"=0})
     */
    private $fengomar = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="estacionamento", type="boolean", nullable=true, options={"default"=0})
     */
    private $estacionamento = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="telefone", type="boolean", nullable=true, options={"default"=0})
     */
    private $telefone = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="despertador", type="boolean", nullable=true, options={"default"=0})
     */
    private $despertador = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="dvd", type="boolean", nullable=true, options={"default"=0})
     */
    private $dvd = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="torradeira", type="boolean", nullable=true, options={"default"=0})
     */
    private $torradeira = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRoupascama(): ?bool
    {
        return $this->roupascama;
    }

    public function setRoupascama(?bool $roupascama): self
    {
        $this->roupascama = $roupascama;

        return $this;
    }

    public function getRoupasbanho(): ?bool
    {
        return $this->roupasbanho;
    }

    public function setRoupasbanho(?bool $roupasbanho): self
    {
        $this->roupasbanho = $roupasbanho;

        return $this;
    }

    public function getLimpeza(): ?bool
    {
        return $this->limpeza;
    }

    public function setLimpeza(?bool $limpeza): self
    {
        $this->limpeza = $limpeza;

        return $this;
    }

    public function getUtilcozinha(): ?bool
    {
        return $this->utilcozinha;
    }

    public function setUtilcozinha(?bool $utilcozinha): self
    {
        $this->utilcozinha = $utilcozinha;

        return $this;
    }

    public function getFogao(): ?bool
    {
        return $this->fogao;
    }

    public function setFogao(?bool $fogao): self
    {
        $this->fogao = $fogao;

        return $this;
    }

    public function getFrigorif(): ?bool
    {
        return $this->frigorif;
    }

    public function setFrigorif(?bool $frigorif): self
    {
        $this->frigorif = $frigorif;

        return $this;
    }

    public function getCongel(): ?bool
    {
        return $this->congel;
    }

    public function setCongel(?bool $congel): self
    {
        $this->congel = $congel;

        return $this;
    }

    public function getForno(): ?bool
    {
        return $this->forno;
    }

    public function setForno(?bool $forno): self
    {
        $this->forno = $forno;

        return $this;
    }

    public function getBarbecue(): ?bool
    {
        return $this->barbecue;
    }

    public function setBarbecue(?bool $barbecue): self
    {
        $this->barbecue = $barbecue;

        return $this;
    }

    public function getMicrondas(): ?bool
    {
        return $this->microndas;
    }

    public function setMicrondas(?bool $microndas): self
    {
        $this->microndas = $microndas;

        return $this;
    }

    public function getMlavaloica(): ?bool
    {
        return $this->mlavaloica;
    }

    public function setMlavaloica(?bool $mlavaloica): self
    {
        $this->mlavaloica = $mlavaloica;

        return $this;
    }

    public function getMlavaroupa(): ?bool
    {
        return $this->mlavaroupa;
    }

    public function setMlavaroupa(?bool $mlavaroupa): self
    {
        $this->mlavaroupa = $mlavaroupa;

        return $this;
    }

    public function getAqcentral(): ?bool
    {
        return $this->aqcentral;
    }

    public function setAqcentral(?bool $aqcentral): self
    {
        $this->aqcentral = $aqcentral;

        return $this;
    }

    public function getSatcabo(): ?bool
    {
        return $this->satcabo;
    }

    public function setSatcabo(?bool $satcabo): self
    {
        $this->satcabo = $satcabo;

        return $this;
    }

    public function getInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(?bool $internet): self
    {
        $this->internet = $internet;

        return $this;
    }

    public function getFengomar(): ?bool
    {
        return $this->fengomar;
    }

    public function setFengomar(?bool $fengomar): self
    {
        $this->fengomar = $fengomar;

        return $this;
    }

    public function getEstacionamento(): ?bool
    {
        return $this->estacionamento;
    }

    public function setEstacionamento(?bool $estacionamento): self
    {
        $this->estacionamento = $estacionamento;

        return $this;
    }

    public function getTelefone(): ?bool
    {
        return $this->telefone;
    }

    public function setTelefone(?bool $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getDespertador(): ?bool
    {
        return $this->despertador;
    }

    public function setDespertador(?bool $despertador): self
    {
        $this->despertador = $despertador;

        return $this;
    }

    public function getDvd(): ?bool
    {
        return $this->dvd;
    }

    public function setDvd(?bool $dvd): self
    {
        $this->dvd = $dvd;

        return $this;
    }

    public function getTorradeira(): ?bool
    {
        return $this->torradeira;
    }

    public function setTorradeira(?bool $torradeira): self
    {
        $this->torradeira = $torradeira;

        return $this;
    }

    public function getPiscina(): ?bool
    {
        return $this->piscina;
    }

    public function setPiscina(?bool $piscina): self
    {
        $this->piscina = $piscina;

        return $this;
    }

    public function getTelevisao(): ?bool
    {
        return $this->televisao;
    }

    public function setTelevisao(?bool $televisao): self
    {
        $this->televisao = $televisao;

        return $this;
    }

    public function getArCondicionado(): ?bool
    {
        return $this->arCondicionado;
    }

    public function setArCondicionado(?bool $arCondicionado): self
    {
        $this->arCondicionado = $arCondicionado;

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

    public function getCasa()
    {
        return $this->casa;
    }

    public function setCasa($casa)
    {
        $this->casa = $casa;
    }
}