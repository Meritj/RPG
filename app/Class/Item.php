<?php
namespace Rpg\Class;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="item")
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
     * @ORM\Column(name="price",type="float", precision=10, scale=0, nullable=false)
     */
    private float $price;

    /**
     * @ORM\Column(name="type", type="string",length=50, nullable=false)
     */
    private string $type;

    /**
     * @ORM\ManyToMany(targetEntity="Rpg\Class\Player", mappedBy="items")
     * @ORM\JoinTable("player_has_items")
     */
    private  $players;

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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}
