<?php

namespace Rpg\Class;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Rpg\Class\Player;

/**
 * @ORM\Table(name="item", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity(repositoryClass="Rpg\Repository\ItemRepository")
 */

class Item
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private string $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private string $description;

    /**
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private int $price;

    /**
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private string $type;



    /**
     * @ORM\ManyToMany(targetEntity="Rpg\Class\Player", mappedBy="items")
     * $ORM\JoinTable("player_has_items")
     */
    private $players;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

    public function getPlayers()
    {
        return $this->players;
    }
    /**
     * @return int
     */

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
