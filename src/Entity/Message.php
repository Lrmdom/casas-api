<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Message
 *
 * @ORM\Table(name="Message", indexes={@ORM\Index(name="IDX_790009E3BF396750", columns={"id"})})
 * @ORM\Entity
 * 
 * @ApiResource()
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=16, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $translation = 'NULL';

    /**
     * @var \Sourcemessage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Sourcemessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(?string $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function getId(): ?Sourcemessage
    {
        return $this->id;
    }

    public function setId(?Sourcemessage $id): self
    {
        $this->id = $id;

        return $this;
    }


}
