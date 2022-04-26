<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Casacancelissue
 *
 * @ORM\Table(name="casacancelissue")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Casacancelissue
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

    /**
     * @var int
     *
     * @ORM\Column(name="cod_casa", type="integer", nullable=false)
     */
    private $codCasa;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getCodCasa(): ?int
    {
        return $this->codCasa;
    }

    public function setCodCasa(int $codCasa): self
    {
        $this->codCasa = $codCasa;

        return $this;
    }


}
