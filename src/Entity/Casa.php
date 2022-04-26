<?php

namespace App\Entity;


use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Serializer\Filter\PropertyFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Casa
 *
 * @ORM\Table(name="casa")
 * @ORM\Entity
 *
 *
 * @ApiResource()
 *
 */
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties: ['cod_casa' => 'exact', 'tipo' => 'exact', 'destino' => 'exact'])]
class Casa
{


    /**
     * @ORM\OneToMany(targetEntity=Prereserva::class, mappedBy="casa")
     *
     */
    private $prereservas;
    /**
     * @ORM\ManyToOne(targetEntity=Proprietario::class, inversedBy="casas")
     * @ORM\JoinColumn(referencedColumnName="propid",nullable=false,name="propid")
     */


    private $owner;
    /**
     * @var int
     *
     * @ORM\Column(name="cod_casa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * ApiFilter(SearchFilter::class, strategy: 'ipartial')
     */
    private $codCasa;
    /**
     * @var string|null
     *
     * @ORM\Column(name="adicionado", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    #[Assert\NotBlank]
    private $adicionado = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="data_activo", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dataActivo = 'NULL';
    /**
     * @var int|null
     *
     * @ORM\Column(name="destino", type="integer", length=45, nullable=true, options={"default"="NULL"})
     *
     * ApiFilter(SearchFilter::class, strategy: 'ipartial')
     */
    private $destino = 'NULL';
    /**
     * @var int|null
     *
     * @ORM\Column(name="proprietario", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $proprietario = 'NULL';
    /**
     * @var int|null
     *
     * @ORM\Column(name="propid", type="integer", nullable=true, options={"default"="NULL"})
     */


    private $propid = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="designacao", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $designacao = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="tipoalojamento", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $tipoalojamento = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="integer", length=45, nullable=true, options={"default"="NULL"})
     */
    private $tipo = 'NULL';
    /**
     * @var int|null
     *
     * @ORM\Column(name="pessoas", type="integer", nullable=true)
     */
    private $pessoas = '0';
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
     * @ORM\Column(name="area", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $area = 'NULL';
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
     * @var string|null
     *
     * @ORM\Column(name="dist_centro", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $distCentro = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="dist_praia", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $distPraia = 'NULL';
    /**
     * @var bool|0
     *
     * @ORM\Column(name="piscina", type="boolean", nullable=true, options={"default"=0})
     */
    private $piscina = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="televisao", type="boolean", nullable=true, options={"default"=0})
     */
    private $televisao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="ar_condicionado", type="boolean", nullable=true, options={"default"=0})
     */
    private $arCondicionado = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_1", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img1 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_2", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img2 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_3", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img3 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_4", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img4 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_5", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img5 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_6", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img6 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_7", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img7 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="img_8", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img8 = '\'images/noimage.jpg\'';
    /**
     * @var string
     *
     * @ORM\Column(name="img_9", type="string", length=255, nullable=false, options={"default"="'images/noimage.jpg'"})
     */
    private $img9 = '\'images/noimage.jpg\'';
    /**
     * @var string
     *
     * @ORM\Column(name="img_10", type="string", length=255, nullable=false, options={"default"="'images/noimage.jpg'"})
     */
    private $img10 = '\'images/noimage.jpg\'';
    /**
     * @var int|null
     *
     * @ORM\Column(name="quartos", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $quartos = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="camascasal", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $camascasal = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="camassingle", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $camassingle = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="casasbanho", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $casasbanho = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="golf", type="boolean", nullable=true, options={"default"=0})
     */
    private $golf = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="tenis", type="boolean", nullable=true, options={"default"=0})
     */
    private $tenis = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="pesca", type="boolean", nullable=true, options={"default"=0})
     */
    private $pesca = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="natacao", type="boolean", nullable=true, options={"default"=0})
     */
    private $natacao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="bowling", type="boolean", nullable=true, options={"default"=0})
     */
    private $bowling = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="casino", type="boolean", nullable=true, options={"default"=0})
     */
    private $casino = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="cinema", type="boolean", nullable=true, options={"default"=0})
     */
    private $cinema = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="discoteca", type="boolean", nullable=true, options={"default"=0})
     */
    private $discoteca = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="outras_actividprox", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $outrasActividprox = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="roupascama", type="boolean", nullable=true, options={"default"=0})
     */
    private $roupascama = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="roupasbanho", type="boolean", nullable=true, options={"default"=0})
     */
    private $roupasbanho = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="limpeza", type="boolean", nullable=true, options={"default"=0})
     */
    private $limpeza = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="utilcozinha", type="boolean", nullable=true, options={"default"=0})
     */
    private $utilcozinha = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="fogao", type="boolean", nullable=true, options={"default"=0})
     */
    private $fogao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="frigorif", type="boolean", nullable=true, options={"default"=0})
     */
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
     * @var string|null
     *
     * @ORM\Column(name="outros_servicos", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $outrosServicos = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="link_info", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $linkInfo = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="link_dispon", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $linkDispon = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true, options={"default"=0})
     */
    private $activo = 0;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="sessid", type="string", length=45, nullable=true, options={"default"= 0})
     */
    private $sessid = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="promo", type="boolean", nullable=true, options={"default"=0})
     */
    private $promo = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="certif", type="boolean", nullable=true, options={"default"=0})
     */
    private $certif = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="data_act", type="string", length=45, nullable=true, options={"default"= 0})
     */
    private $dataAct = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="titulo", type="string", length=600, nullable=true, options={"default"= 0})
     */
    private $titulo = 0;
    /**
     * @var int|null
     *
     * @ORM\Column(name="qtspecialoffer", type="integer", nullable=true, options={"default"=0})
     */
    private $qtspecialoffer = NULL;
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
    /**
     * @var bool|0
     *
     * @ORM\Column(name="animais", type="boolean", nullable=true, options={"default"=0})
     */
    private $animais = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="fumadores", type="boolean", nullable=true, options={"default"=0})
     */
    private $fumadores = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="caucao", type="boolean", nullable=true, options={"default"=0})
     */
    private $caucao = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="valorcaucao", type="string", length=10, nullable=true, options={"default"= 0})
     */
    private $valorcaucao = 0;
    /**
     * @var string|null
     *
     * @ORM\Column(name="deficientes", type="string", length=45, nullable=true, options={"default"=0})
     */
    private $deficientes = 0;
    /**
     * @var bool|0
     *
     * @ORM\Column(name="concelho", type="string", length=45, nullable=true, options={"default"=0})
     */
    private $concelho = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_img_1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $altImg1 = 'NULL';
    /**
     * @var bool
     *
     * @ORM\Column(name="for_sale", type="boolean", nullable=false)
     */
    private $forSale = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="for_rent", type="boolean", nullable=false , options={"default"=0})
     */
    private $forRent = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="for_arrenda", type="boolean", nullable=false , options={"default"=0})
     */
    private $forArrenda = 0;
    /**
     * @var int|0
     *
     * @ORM\Column(name="valor_arrendamento", type="integer", nullable=true, options={"default"=0})
     */
    private $valorArrendamento = NULL;
    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_venda", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valorVenda = NULL;
    /**
     * @var bool
     *
     * @ORM\Column(name="certif_energ", type="boolean", nullable=false)
     */
    private $certifEnerg;
    /**
     * @var string
     *
     * @ORM\Column(name="certif_energ_level", type="string", length=5, nullable=false)
     */
    private $certifEnergLevel;
    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=100, nullable=false)
     */
    private $seoTitle;
    /**
     * @var int
     *
     * @ORM\Column(name="ano", type="integer", nullable=false)
     */
    private $ano;

    public function __construct()
    {
        $this->prereservas = new ArrayCollection();
        $this->reservas = new ArrayCollection();
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner): void
    {
        $this->owner = $owner;
    }

    public function getCodCasa(): ?int
    {
        return $this->codCasa;
    }

    public function getAdicionado(): ?string
    {
        return $this->adicionado;
    }

    public function setAdicionado(?string $adicionado): self
    {
        $this->adicionado = $adicionado;

        return $this;
    }

    public function getDataActivo(): ?string
    {
        return $this->dataActivo;
    }

    public function setDataActivo(?string $dataActivo): self
    {
        $this->dataActivo = $dataActivo;

        return $this;
    }

    public function getDestino(): ?int
    {
        return $this->destino;
    }

    public function setDestino(?int $destino): self
    {
        $this->destino = $destino;

        return $this;
    }

    public function getPropid(): ?int
    {
        return $this->propid;
    }

    public function setPropid(?int $propid): self
    {
        $this->propid = $propid;

        return $this;
    }

    public function getDesignacao(): ?string
    {
        return $this->designacao;
    }

    public function setDesignacao(?string $designacao): self
    {
        $this->designacao = $designacao;

        return $this;
    }

    public function getTipoalojamento(): ?string
    {
        return $this->tipoalojamento;
    }

    public function setTipoalojamento(?string $tipoalojamento): self
    {
        $this->tipoalojamento = $tipoalojamento;

        return $this;
    }

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(?int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getPessoas(): ?int
    {
        return $this->pessoas;
    }

    public function setPessoas(?int $pessoas): self
    {
        $this->pessoas = $pessoas;

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

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

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

    public function getDistCentro(): ?string
    {
        return $this->distCentro;
    }

    public function setDistCentro(?string $distCentro): self
    {
        $this->distCentro = $distCentro;

        return $this;
    }

    public function getDistPraia(): ?string
    {
        return $this->distPraia;
    }

    public function setDistPraia(?string $distPraia): self
    {
        $this->distPraia = $distPraia;

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

    public function getImg1(): ?string
    {
        return $this->img1;
    }

    public function setImg1(?string $img1): self
    {
        $this->img1 = $img1;

        return $this;
    }

    public function getImg2(): ?string
    {
        return $this->img2;
    }

    public function setImg2(?string $img2): self
    {
        $this->img2 = $img2;

        return $this;
    }

    public function getImg3(): ?string
    {
        return $this->img3;
    }

    public function setImg3(?string $img3): self
    {
        $this->img3 = $img3;

        return $this;
    }

    public function getImg4(): ?string
    {
        return $this->img4;
    }

    public function setImg4(?string $img4): self
    {
        $this->img4 = $img4;

        return $this;
    }

    public function getImg5(): ?string
    {
        return $this->img5;
    }

    public function setImg5(?string $img5): self
    {
        $this->img5 = $img5;

        return $this;
    }

    public function getImg6(): ?string
    {
        return $this->img6;
    }

    public function setImg6(?string $img6): self
    {
        $this->img6 = $img6;

        return $this;
    }

    public function getImg7(): ?string
    {
        return $this->img7;
    }

    public function setImg7(?string $img7): self
    {
        $this->img7 = $img7;

        return $this;
    }

    public function getImg8(): ?string
    {
        return $this->img8;
    }

    public function setImg8(?string $img8): self
    {
        $this->img8 = $img8;

        return $this;
    }

    public function getImg9(): ?string
    {
        return $this->img9;
    }

    public function setImg9(string $img9): self
    {
        $this->img9 = $img9;

        return $this;
    }

    public function getImg10(): ?string
    {
        return $this->img10;
    }

    public function setImg10(string $img10): self
    {
        $this->img10 = $img10;

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

    public function getGolf(): ?bool
    {
        return $this->golf;
    }

    public function setGolf(?bool $golf): self
    {
        $this->golf = $golf;

        return $this;
    }

    public function getTenis(): ?bool
    {
        return $this->tenis;
    }

    public function setTenis(?bool $tenis): self
    {
        $this->tenis = $tenis;

        return $this;
    }

    public function getPesca(): ?bool
    {
        return $this->pesca;
    }

    public function setPesca(?bool $pesca): self
    {
        $this->pesca = $pesca;

        return $this;
    }

    public function getNatacao(): ?bool
    {
        return $this->natacao;
    }

    public function setNatacao(?bool $natacao): self
    {
        $this->natacao = $natacao;

        return $this;
    }

    public function getBowling(): ?bool
    {
        return $this->bowling;
    }

    public function setBowling(?bool $bowling): self
    {
        $this->bowling = $bowling;

        return $this;
    }

    public function getCasino(): ?bool
    {
        return $this->casino;
    }

    public function setCasino(?bool $casino): self
    {
        $this->casino = $casino;

        return $this;
    }

    public function getCinema(): ?bool
    {
        return $this->cinema;
    }

    public function setCinema(?bool $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    public function getDiscoteca(): ?bool
    {
        return $this->discoteca;
    }

    public function setDiscoteca(?bool $discoteca): self
    {
        $this->discoteca = $discoteca;

        return $this;
    }

    public function getOutrasActividprox(): ?string
    {
        return $this->outrasActividprox;
    }

    public function setOutrasActividprox(?string $outrasActividprox): self
    {
        $this->outrasActividprox = $outrasActividprox;

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

    public function getOutrosServicos(): ?string
    {
        return $this->outrosServicos;
    }

    public function setOutrosServicos(?string $outrosServicos): self
    {
        $this->outrosServicos = $outrosServicos;

        return $this;
    }

    public function getLinkInfo(): ?string
    {
        return $this->linkInfo;
    }

    public function setLinkInfo(?string $linkInfo): self
    {
        $this->linkInfo = $linkInfo;

        return $this;
    }

    public function getLinkDispon(): ?string
    {
        return $this->linkDispon;
    }

    public function setLinkDispon(?string $linkDispon): self
    {
        $this->linkDispon = $linkDispon;

        return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(?bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getSessid(): ?string
    {
        return $this->sessid;
    }

    public function setSessid(?string $sessid): self
    {
        $this->sessid = $sessid;

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

    public function getCertif(): ?bool
    {
        return $this->certif;
    }

    public function setCertif(?bool $certif): self
    {
        $this->certif = $certif;

        return $this;
    }

    public function getDataAct(): ?string
    {
        return $this->dataAct;
    }

    public function setDataAct(?string $dataAct): self
    {
        $this->dataAct = $dataAct;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getQtspecialoffer(): ?int
    {
        return $this->qtspecialoffer;
    }

    public function setQtspecialoffer(?int $qtspecialoffer): self
    {
        $this->qtspecialoffer = $qtspecialoffer;

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

    public function getCaucao(): ?bool
    {
        return $this->caucao;
    }

    public function setCaucao(?bool $caucao): self
    {
        $this->caucao = $caucao;

        return $this;
    }

    public function getValorcaucao(): ?string
    {
        return $this->valorcaucao;
    }

    public function setValorcaucao(?string $valorcaucao): self
    {
        $this->valorcaucao = $valorcaucao;

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

    public function getConcelho(): ?string
    {
        return $this->concelho;
    }

    public function setConcelho(?string $concelho): self
    {
        $this->concelho = $concelho;

        return $this;
    }

    public function getAltImg1(): ?string
    {
        return $this->altImg1;
    }

    public function setAltImg1(?string $altImg1): self
    {
        $this->altImg1 = $altImg1;

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

    public function getForRent(): ?bool
    {
        return $this->forRent;
    }

    public function setForRent(bool $forRent): self
    {
        $this->forRent = $forRent;

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

    public function getValorArrendamento(): ?int
    {
        return $this->valorArrendamento;
    }

    public function setValorArrendamento(?int $valorArrendamento): self
    {
        $this->valorArrendamento = $valorArrendamento;

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

    public function getCertifEnerg(): ?bool
    {
        return $this->certifEnerg;
    }

    public function setCertifEnerg(bool $certifEnerg): self
    {
        $this->certifEnerg = $certifEnerg;

        return $this;
    }

    public function getCertifEnergLevel(): ?string
    {
        return $this->certifEnergLevel;
    }

    public function setCertifEnergLevel(string $certifEnergLevel): self
    {
        $this->certifEnergLevel = $certifEnergLevel;

        return $this;
    }

    public function getSeoTitle(): ?string
    {
        return $this->seoTitle;
    }

    public function setSeoTitle(string $seoTitle): self
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    public function getAno(): ?int
    {
        return $this->ano;
    }

    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    public function addPrereserva(Prereserva $prereserva): self
    {
        if (!$this->prereservas->contains($prereserva)) {
            $this->prereservas[] = $prereserva;
            $prereserva->setPrereservas($prereserva);
        }

        return $this;
    }

    public function removePrereserva(Prereserva $prereserva): self
    {
        if ($this->prereservas->removeElement($prereserva)) {
            // set the owning side to null (unless already changed)
            if ($prereserva->getPrereservas() === $this) {
                $prereserva->setPrereservas(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Prereserva[]
     */
    public function getPrereservas(): Collection
    {
        return $this->prereservas;
    }


}
