<?php


namespace Rpg\Controller;


use Rpg\Utils\AbstractController;
use Rpg\Utils\Fight;
use Rpg\Class\Monster;
use Rpg\Class\Player;

require_once __DIR__ . '/../../config/bootstrap.php';

class CombatController extends AbstractController
{

    public function startFight()
    {

        $player = $this->em->getRepository(Player::class)->findOneBy(
            [
                'name' => $_GET['name']
            ]
        );
        $monster = $this->em->getRepository(Monster::class)->findOneBy(
            [
                'name' => $_GET['monster']
            ]
        );

        $fight = new Fight($player, $monster);

        $fight->start();

    }

}
