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
 * Sourcemessage
 *
 * @ORM\Table (name="SourceMessage")
 * @ORM\Entity
 */
#[ApiResource]
class Sourcemessage
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
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $category = 'NULL';
    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $message = 'NULL';
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getCategory() : ?string
    {
        return $this->category;
    }
    public function setCategory(?string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}
