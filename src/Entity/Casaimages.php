<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Casaimages
 *
 * @ORM\Table(name="casaimages")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Casaimages
{
    /**
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casaimages")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $casa;

    /**
     * @var string|null
     * @ORM\Column(name="cod_casa", type="integer",  nullable=true, options={"default"="NULL"})
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="casaimages")
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
     * @ORM\Column(name="img1", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    private $img1 = '\'images/noimage.jpg\'';


    public function getImg1(): ?string
    {
        return $this->img1;
    }

    public function setImg1(?string $img1): self
    {
        $this->img1 = $img1;

        return $this;
    }


}