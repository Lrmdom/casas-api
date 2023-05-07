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
#[ApiFilter(SearchFilter::class, properties: ['titulo' => 'partial', 'cod_casa' => 'exact', 'tipo' => 'exact', 'destino' => 'exact', 'proprietario' => 'exact', 'propid' => 'exact'])]
#[ApiFilter(OrderFilter::class, properties: ['tipo', 'cod_casa'])]
#[ApiResource(
    normalizationContext: ['groups' => ['casa']],
    itemOperations: ['get', 'patch', 'put']  //try with refine

)]
class Casa
{
    /**
     * @ORM\OneToOne(targetEntity=Casaamenities::class, mappedBy="casa")
     *
     */
    #[Groups(['casa'])]
    private $casaamenities;
    /**
     * @ORM\OneToOne(targetEntity=Casageodata::class, mappedBy="casa")
     *
     */
    #[Groups(['casa'])]
    private $casageodatas;
    /**
     * @ORM\OneToOne(targetEntity=Casaattributes::class, mappedBy="casa")
     *
     */
    #[Groups(['casa'])]
    private $casaattributes;
    /**
     * @ORM\OneToMany(targetEntity=Reserva::class, mappedBy="casa")
     *
     */
    #[Groups(['casa'])]
    private $reservas;
    /**
     * @ORM\OneToMany(targetEntity=Prereserva::class, mappedBy="casa")
     *
     */
    #[Groups(['casa'])]
    private $prereservas;

    /**
     * @ORM\OneToMany(targetEntity=Casaimages::class, mappedBy="casa")
     * @ORM\JoinColumn(referencedColumnName="codCasa",nullable=false,name="codCasa")
     */
    #[Groups(['casa'])]
    #[ApiSubresource]
    private iterable $casaimages;

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

    #[ApiFilter(SearchFilter::class, strategy: "exact")]
    #[Groups(['casa'])]
    private $codCasa;
    /**
     * @var string|null
     *
     * @ORM\Column(name="adicionado", type="string", length=45, nullable=true)
     */

    private $adicionado;
    /**
     * @var string|null
     *
     * @ORM\Column(name="data_activo", type="string", length=45, nullable=true)
     */
    private $dataActivo ;
    /**
     * @var int|null
     *
     * @ORM\Column(name="destino", type="string", length=45, nullable=true, options={"default"="NULL"})
     *
     * ApiFilter(SearchFilter::class, strategy: 'ipartial')
     */
    #[Groups(['casa'])]
    private $destino = 'NULL';


    /**
     * @var int|null
     *
     * @ORM\Column(name="proprietario", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
    private  $proprietario ;
    /**
     * @var int|null
     *
     * @ORM\Column(name="propid", type="integer", nullable=false)
     */


    private $propid ;
    /**
     * @var string|null
     *
     * @ORM\Column(name="designacao", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    #[Assert\NotBlank]
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
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    #[Groups(['casa'])]
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
     * @ORM\Column(name="area", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $area = 'NULL';


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
    #[ApiFilter(SearchFilter::class, strategy: "exact")]
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
    #[Groups(['casa'])]
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
     * @ORM\Column(name="caucao", type="boolean", nullable=true, options={"default"=0})
     */
    #[Groups(['casa'])]
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
     * @ORM\Column(name="alt_img_1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $altImg1 = 'NULL';
    /**
     * @var bool
     *
     * @ORM\Column(name="for_sale", type="boolean", nullable=false)
     */
    #[Groups(['casa'])]
    private $forSale = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="for_rent", type="boolean", nullable=false , options={"default"=0})
     */
    #[Groups(['casa'])]
    private $forRent = 0;
    /**
     * @var bool
     *
     * @ORM\Column(name="for_arrenda", type="boolean", nullable=false , options={"default"=0})
     */
    #[Groups(['casa'])]
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
     * @ORM\Column(name="valor_venda", type="string", nullable=true, options={"default"="NULL"})
     */
    private $valorVenda = NULL;
    /**
     * @var bool
     *
     * @ORM\Column(name="certif_energ", type="boolean", nullable=false)
     */
    #[Groups(['casa'])]
    private $certifEnerg = 0;
    /**
     * @var string
     *
     * @ORM\Column(name="certif_energ_level", type="string", length=5, nullable=false)
     */
    private $certifEnergLevel = 0;
    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=100, nullable=false)
     */
    private $seoTitle;
    /**
     * @var int
     *
     * @ORM\Column(name="anoconstrucao", type="integer", nullable=false)
     */
    private $anoconstrucao = 0;

    public function __construct()
    {
        $this->prereservas = new ArrayCollection();
        $this->reservas = new ArrayCollection();
        $this->casaimages = new ArrayCollection();
        /*$this->casaattributes = new ArrayCollection();
        $this->casageodata = new ArrayCollection();
        $this->casaamenities = new ArrayCollection();*/
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


    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

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

    public function getValorVenda(): ?string
    {
        return $this->valorVenda;
    }

    public function setValorVenda(?string $valorVenda): self
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

    public function getAnoconstrucao(): ?int
    {
        return $this->anoconstrucao;
    }

    public function setAnoconstrucao(int $anoconstrucao): self
    {
        $this->anoconstrucao = $anoconstrucao;

        return $this;
    }

    /* public function addPrereserva(Prereserva $prereserva): self
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
     }*/

    /**
     * @return Collection|Prereserva[]
     */
    public function getPrereservas(): Collection
    {
        return $this->prereservas;
    }

    /**
     * @return Collection|Casaimages[]
     */
    public function getCasaimages(): Collection
    {
        return $this->casaimages;
    }

    /**
     * @return Collection|Reserva[]
     */
    public function getReservas(): Collection
    {
        return $this->reservas;
    }

    /**
     * @return Collection|Casaattributes[]
     */
    public function getCasaattributes()
    {
        return $this->casaattributes;
    }

    /**
     * @return Collection|Casaamenities[]
     */
    public function getCasaamenities()/*: Collection*/
    {
        return $this->casaamenities;
    }

    /**
     * @return Collection|Casageodatas[]
     */
    public function getCasageodatas()
    {
        return $this->casageodatas;
    }

    /**
     * @return int|null
     */
    public function getProprietario(): ?int
    {
        return $this->proprietario;
    }

    /**
     * @param int|null $proprietario
     */
    public function setProprietario(?int $proprietario): void
    {
        $this->proprietario = $proprietario;
    }


}
