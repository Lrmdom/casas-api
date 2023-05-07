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
 * Proprietariocancelissue
 *
 * @ORM\Table (name="proprietariocancelissue")
 * @ORM\Entity
 */
#[ApiResource]
class Proprietariocancelissue
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
     * @ORM\Column(name="propid", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $propid = NULL;
    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $descricao = 'NULL';
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getPropid() : ?int
    {
        return $this->propid;
    }
    public function setPropid(?int $propid) : self
    {
        $this->propid = $propid;
        return $this;
    }
    public function getDescricao() : ?string
    {
        return $this->descricao;
    }
    public function setDescricao(?string $descricao) : self
    {
        $this->descricao = $descricao;
        return $this;
    }
}
