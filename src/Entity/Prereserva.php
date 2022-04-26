<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Prereserva
 *
 * @ORM\Table(name="prereserva")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Prereserva
{

    /**
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="prereservas")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $casa;

    /**
     * @var int
     *
     * @ORM\Column(name="n_prereserva", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nPrereserva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $data = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="expira", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expira = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $id = 'NULL';

    /**
     * @var string|null
     * @ORM\Column(name="cod_casa", type="string", length=45, nullable=true, options={"default"="NULL"})
     * @ORM\ManyToOne(targetEntity=Casa::class, inversedBy="prereservas")
     * @ORM\JoinColumn(referencedColumnName="cod_casa",nullable=false,name="cod_casa")
     */
    private $codCasa = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nm_mes", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nmMes = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_semana", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nSemana = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="inicio", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $inicio = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fim", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $fim = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="preco", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $preco = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="quinzena", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $quinzena = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nome", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nome = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="morada", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $morada = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $telefone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perguntas", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $perguntas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sugestoes", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $sugestoes = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comentarios", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $comentarios = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="situacao", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $situacao = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="forma_pagamento", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $formaPagamento = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valor = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sessionid", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $sessionid = 'NULL';

    /**
     * @var bool|0
     *
     * @ORM\Column(name="voto", type="boolean", nullable=true, options={"default"=0})
     */
    private $voto = 0;

    public function getNPrereserva(): ?int
    {
        return $this->nPrereserva;
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

    public function getExpira(): ?string
    {
        return $this->expira;
    }

    public function setExpira(?string $expira): self
    {
        $this->expira = $expira;

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

    public function getCodCasa(): ?string
    {
        return $this->codCasa;
    }

    public function setCodCasa(?string $codCasa): self
    {
        $this->codCasa = $codCasa;

        return $this;
    }

    public function getNmMes(): ?string
    {
        return $this->nmMes;
    }

    public function setNmMes(?string $nmMes): self
    {
        $this->nmMes = $nmMes;

        return $this;
    }

    public function getNSemana(): ?string
    {
        return $this->nSemana;
    }

    public function setNSemana(?string $nSemana): self
    {
        $this->nSemana = $nSemana;

        return $this;
    }

    public function getInicio(): ?string
    {
        return $this->inicio;
    }

    public function setInicio(?string $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    public function getFim(): ?string
    {
        return $this->fim;
    }

    public function setFim(?string $fim): self
    {
        $this->fim = $fim;

        return $this;
    }

    public function getPreco(): ?string
    {
        return $this->preco;
    }

    public function setPreco(?string $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getQuinzena(): ?string
    {
        return $this->quinzena;
    }

    public function setQuinzena(?string $quinzena): self
    {
        $this->quinzena = $quinzena;

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

    public function getMorada(): ?string
    {
        return $this->morada;
    }

    public function setMorada(?string $morada): self
    {
        $this->morada = $morada;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getPerguntas(): ?string
    {
        return $this->perguntas;
    }

    public function setPerguntas(?string $perguntas): self
    {
        $this->perguntas = $perguntas;

        return $this;
    }

    public function getSugestoes(): ?string
    {
        return $this->sugestoes;
    }

    public function setSugestoes(?string $sugestoes): self
    {
        $this->sugestoes = $sugestoes;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(?string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getSituacao(): ?string
    {
        return $this->situacao;
    }

    public function setSituacao(?string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }

    public function getFormaPagamento(): ?int
    {
        return $this->formaPagamento;
    }

    public function setFormaPagamento(?int $formaPagamento): self
    {
        $this->formaPagamento = $formaPagamento;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(?int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getSessionid(): ?string
    {
        return $this->sessionid;
    }

    public function setSessionid(?string $sessionid): self
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    public function getVoto(): ?bool
    {
        return $this->voto;
    }

    public function setVoto(?bool $voto): self
    {
        $this->voto = $voto;

        return $this;
    }

    public function getCasa()
    {
        return $this->casa;
    }

    public function setCasa($casa): void
    {
        $this->owner = $casa;
    }

}
