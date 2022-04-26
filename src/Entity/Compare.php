<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Compare
 *
 * @ORM\Table(name="compare")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Compare
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
     * @ORM\Column(name="cod_casa", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $codCasa = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mylistcol", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $mylistcol = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sessid", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $sessid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $cliente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $data = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMylistcol(): ?string
    {
        return $this->mylistcol;
    }

    public function setMylistcol(?string $mylistcol): self
    {
        $this->mylistcol = $mylistcol;

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

    public function getCliente(): ?string
    {
        return $this->cliente;
    }

    public function setCliente(?string $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
