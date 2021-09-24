<?php


namespace Rpg\Controller;


use Rpg\Utils\Fight;
use Rpg\Class\Monster;
use Rpg\Class\Player;

require_once __DIR__ . '/../../config/bootstrap.php';

class CombatController
{

    public function startFight()
    {
        $em = GetEntityManager();

        $player = $em->getRepository(Player::class)->findOneBy(
            [
                'name' => $_GET['name']
            ]
        );
        $monster = $em->getRepository(Monster::class)->findOneBy(
            [
                'name' => $_GET['monster']
            ]
        );

        $fight = new Fight($player, $monster);

        $fight->start();

    }

}
