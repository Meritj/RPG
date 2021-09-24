<?php
namespace Rpg\Class;
use Rpg\Class\Item;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="magasin", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity(repositoryClass="Rpg\Repository\MagasinRepository")
 */

 class Magasin {

      /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected int $id;

    /**
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    protected string $name;

    /**
     * @ORM\Column(name="hp", type="float", precision=10, scale=0, nullable=false)
     */
    
 }