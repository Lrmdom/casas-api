<?php

namespace App\Entity;

use ApiPlatform\Metadata\Link;
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
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Casaimages
 *
 * @ORM\Table (name="casaimages")
 * @ORM\Entity
 */
//#[ApiFilter(SearchFilter::class, properties: ['casa.codCasa' => SearchFilter::STRATEGY_EXACT])]
// todo this to other relations to enable url that do search on relation ...
#[ApiResource]
#[ApiResource(uriTemplate: '/casas/{codCasa}/casaimages.{_format}', uriVariables: ['codCasa' => new Link(fromClass: \App\Entity\Casa::class, identifiers: ['codCasa'], toProperty: 'casa')], status: 200, operations: [new GetCollection()])]
class Casaimages
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
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casaimages")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $casa;
    /**
     * @var string|null
     * @ORM\Column(name="cod_casa", type="integer",  length=11, nullable=false)
     */
    private $codCasa;
    /**
     * @var string|null
     *
     * @ORM\Column(name="img1", type="string", length=255, nullable=true, options={"default"="images/noimage.jpg"})
     */
    #[Groups(['casa'])]
    private $img1 = '\'images/noimage.jpg\'';
    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true, options={"default"="images/noimage.jpg"})
     */
    #[Groups(['casa'])]
    private $path = '\'images/noimage.jpg\'';
    /**
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param string|null $path
     */
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getImg1() : ?string
    {
        return $this->img1;
    }
    public function setImg1(?string $img1) : self
    {
        $this->img1 = $img1;
        return $this;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setId(?string $id) : self
    {
        $this->id = $id;
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
    public function getCodCasa() : ?int
    {
        return $this->codCasa;
    }
    public function setCodCasa(?int $codCasa) : self
    {
        $this->codCasa = $codCasa;
        return $this;
    }
}