<?php


namespace Rpg\Controller;


use Rpg\Class\Magasin;
use Rpg\Class\Monster;
use Rpg\Class\Player;
use Rpg\Templates\TemplateUtils;
use Rpg\Utils\AbstractController;

require_once __DIR__ . '/../../config/bootstrap.php';

class VillageController extends AbstractController
{
    public function index()
    {
        // Sur cette ligne on récupére le repository correspondant au Player, pour ensuite utiliser la méthode findOneBy() de ce dernier
        $player = $this->em->getRepository(Player::class)->findOneBy(
            [
                'name' => $_GET['name']
            ]
        );
        // Sur cette ligne on récupére le repository correspondant au Monster, pour ensuite utiliser la méthode findAll() de ce dernier
        $monsters = $this->em->getRepository(Monster::class)->findAll();
        $magasin = $this->em->getRepository(Magasin::class)->find(1);
        $header = TemplateUtils::getHeader();


        $footer = TemplateUtils::getFooter();
        $this->render('village.html.php', [
            'header' => $header,
            'footer' => $footer,
            'monsters' => $monsters,
            'player' => $player,
            'magasin' => $magasin
        ]);
    }

}
