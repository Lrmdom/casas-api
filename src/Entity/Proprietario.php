<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Proprietario
 *
 * @ORM\Table(name="proprietario")
 * @ORM\Entity
 *
 * @ApiResource()
 */
class Proprietario
{
    /**
     * @ORM\OneToMany(targetEntity=Casa::class, mappedBy="owner")
     */

    private $casas;
    /**
     * @var int
     *
     * @ORM\Column(name="propid", type="integer", nullable=true, options={"default"="NULL"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $propid = 'NULL';
    /**
     * @var string
     *
     * @ORM\Column(name="proprietario", type="string", length=50, nullable=false)
     */
    private $proprietario;
    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=45, nullable=false)
     */
    private $senha;
    /**
     * @var string
     *
     * @ORM\Column(name="senha_repeat", type="string", length=45, nullable=false)
     */
    private $senhaRepeat;
    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $salt = 'NULL';
    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=false)
     */
    private $telefone;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="morada", type="string", length=255, nullable=false)
     */
    private $morada;
    /**
     * @var string
     *
     * @ORM\Column(name="cod_postal", type="string", length=45, nullable=false)
     */
    private $codPostal;
    /**
     * @var string
     *
     * @ORM\Column(name="localidade", type="string", length=45, nullable=false)
     */
    private $localidade;
    /**
     * @var string|null
     *
     * @ORM\Column(name="conflito1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $conflito1 = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="conflito2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $conflito2 = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="conflito3", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $conflito3 = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="sessid", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $sessid = 'NULL';
    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=false)
     */
    private $pais;
    /**
     * @var bool
     *
     * @ORM\Column(name="subscribe_newsletter", type="boolean", nullable=false)
     */
    private $subscribeNewsletter;
    /**
     * @var bool
     *
     * @ORM\Column(name="facebook_account", type="boolean", nullable=false)
     */
    private $facebookAccount = '0';
    /**
     * @var int
     *
     * @ORM\Column(name="fb_id", type="bigint", nullable=false)
     */
    private $fbId;

    public function __construct()
    {
        $this->casas = new ArrayCollection();
    }

    /**
     * @return Collection|Casa[]
     */
    public function getCasas(): Collection
    {
        return $this->casas;
    }

    public function getPropid(): ?int
    {
        return $this->propid;
    }

    public function getProprietario(): ?string
    {
        return $this->proprietario;
    }

    public function setProprietario(string $proprietario): self
    {
        $this->proprietario = $proprietario;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getSenhaRepeat(): ?string
    {
        return $this->senhaRepeat;
    }

    public function setSenhaRepeat(string $senhaRepeat): self
    {
        $this->senhaRepeat = $senhaRepeat;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMorada(): ?string
    {
        return $this->morada;
    }

    public function setMorada(string $morada): self
    {
        $this->morada = $morada;

        return $this;
    }

    public function getCodPostal(): ?string
    {
        return $this->codPostal;
    }

    public function setCodPostal(string $codPostal): self
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    public function getLocalidade(): ?string
    {
        return $this->localidade;
    }

    public function setLocalidade(string $localidade): self
    {
        $this->localidade = $localidade;

        return $this;
    }

    public function getConflito1(): ?string
    {
        return $this->conflito1;
    }

    public function setConflito1(?string $conflito1): self
    {
        $this->conflito1 = $conflito1;

        return $this;
    }

    public function getConflito2(): ?string
    {
        return $this->conflito2;
    }

    public function setConflito2(?string $conflito2): self
    {
        $this->conflito2 = $conflito2;

        return $this;
    }

    public function getConflito3(): ?string
    {
        return $this->conflito3;
    }

    public function setConflito3(?string $conflito3): self
    {
        $this->conflito3 = $conflito3;

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

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getSubscribeNewsletter(): ?bool
    {
        return $this->subscribeNewsletter;
    }

    public function setSubscribeNewsletter(bool $subscribeNewsletter): self
    {
        $this->subscribeNewsletter = $subscribeNewsletter;

        return $this;
    }

    public function getFacebookAccount(): ?bool
    {
        return $this->facebookAccount;
    }

    public function setFacebookAccount(bool $facebookAccount): self
    {
        $this->facebookAccount = $facebookAccount;

        return $this;
    }

    public function getFbId(): ?string
    {
        return $this->fbId;
    }

    public function setFbId(string $fbId): self
    {
        $this->fbId = $fbId;

        return $this;
    }

    public function addCasa(Casa $casa): self
    {
        if (!$this->casas->contains($casa)) {
            $this->casas[] = $casa;
            $casa->setOwner($this);
        }

        return $this;
    }

    public function removeCasa(Casa $casa): self
    {
        if ($this->casas->removeElement($casa)) {
            // set the owning side to null (unless already changed)
            if ($casa->getOwner() === $this) {
                $casa->setOwner(null);
            }
        }

        return $this;
    }


}
