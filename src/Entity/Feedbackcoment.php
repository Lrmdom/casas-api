<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Feedbackcoment
 *
 * @ORM\Table(name="feedbackcoment")
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Feedbackcoment
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
     * @ORM\Column(name="coment", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $coment = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_voto", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valorVoto = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reserva", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $reserva = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nome = 'NULL';

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

    public function getComent(): ?string
    {
        return $this->coment;
    }

    public function setComent(?string $coment): self
    {
        $this->coment = $coment;

        return $this;
    }

    public function getValorVoto(): ?int
    {
        return $this->valorVoto;
    }

    public function setValorVoto(?int $valorVoto): self
    {
        $this->valorVoto = $valorVoto;

        return $this;
    }

    public function getReserva(): ?int
    {
        return $this->reserva;
    }

    public function setReserva(?int $reserva): self
    {
        $this->reserva = $reserva;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }


}
