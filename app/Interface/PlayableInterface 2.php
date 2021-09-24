<?php

namespace Rpg\Interface;

use Rpg\Utils\Character;
//Les interfaces objet vous permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter
interface PlayableInterface
{
    public function attack($weapon, Character $target);
    public function move();
    public function defend($shield);
    public function throwSpell($spell);
    public function sePresenter();
}
