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
 * ReservaState
 *
 * @ORM\Table (name="reserva_state")
 * @ORM\Entity
 */
#[ApiResource]
class ReservaState
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
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=25, nullable=false)
     */
    private $state;
    public function getId() : ?int
    {
        return $this->id;
    }
    public function getState() : ?string
    {
        return $this->state;
    }
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
}
