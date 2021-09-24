<?php


namespace Rpg\Controller;


use Rpg\Class\Item;
use Rpg\Class\Magasin;
use Rpg\Templates\TemplateUtils;
use Rpg\Utils\AbstractController;

class ShopController extends AbstractController
{
    public function index(){
        // La liste de mes items
        $items = $this->em->getRepository(Item::class)->findAll();
        $magasin = $this->em->getRepository(Magasin::class)->find(1);
        // De mon header
        $header = TemplateUtils::getHeader();
        // De mon footer
        $footer = TemplateUtils::getFooter();
        $this->render('magasin.html.php',[
            'items'=> $items,
            'header' => $header,
            'footer' => $footer,
            'magasin' => $magasin
        ]);
    }
}
