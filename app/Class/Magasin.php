<?php

namespace Rpg\Class;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="shop")
 * @ORM\Entity(repositoryClass="Rpg\Repository\ShopRepository")
 */
class Magasin
{

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

//    private array $items;

    /**
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private string $name;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
