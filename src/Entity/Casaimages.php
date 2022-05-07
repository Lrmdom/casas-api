<?php

namespace App\Entity;

use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Casaimages
 *
 * @ORM\Table(name="casaimages")
 * @ORM\Entity
 *
 * @ApiResource()
 */
#[ApiFilter(SearchFilter::class, properties: ['casa.codCasa' => SearchFilter::STRATEGY_EXACT])]
// todo this to other relations to enable url that do search on relation ...
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
     * @var int|null
     * @ORM\Column(name="cod_casa", type="integer",  nullable=true, options={"default"="NULL"})
     */
    private $codCasa = 'NULL';


    /**
     * @var string|null
     *
     * @ORM\Column(name="img1", type="string", length=255, nullable=true, options={"default"="'images/noimage.jpg'"})
     */
    #[Groups(['casa'])]
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
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

    public function getCodCasa(): ?int
    {
        return $this->codCasa;
    }

    public function setCodCasa(?int $codCasa): self
    {
        $this->codCasa = $codCasa;

        return $this;
    }
}