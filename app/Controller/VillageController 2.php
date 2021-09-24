<?php


namespace Rpg\Controller;


use Rpg\Class\Monster;
use Rpg\Class\Player;
use Rpg\Utils\Fight;
use Rpg\Templates\TemplateUtils;
use Rpg\Utils\AbstractController;

require_once __DIR__ . '/../../config/bootstrap.php';

class VillageController extends AbstractController
{
    public function index()
    {
        $name = $_GET['name'];
      
        // Sur cette ligne on récupére le repository correspondant au Monster, pour ensuite utiliser la méthode findAll() de ce dernier
        $player=$this->em->getRepository(Player::class)->findOneBy(['name'=> $name]); // ici on récupère que le nom 
                                                        // si le nom de la base de donnée est égale au nom 
        
        $monsters = $this->em->getRepository(Monster::class)->findAll();
      
        $header=TemplateUtils::getHeader();
        $footer=TemplateUtils::getFooter(); // création des variables pour le render
        
  
       
        $this->render('village.html.php', // il va renvoyer le fichier village, dans lequel je vais passer un tableau de variable. 
                                            // header, footer etc. 
        [
            'header'=> $header,
            'footer'=> $footer,
            'player'=> $player,
            'monsters'=> $monsters,
        ]);
    }}

/**
 * Etape 1: Récupéré la liste des monstres
 * Etape 2: Afficher la liste des monstres
 * Etape 3 Crée des lien html avec l'affichage de la liste des monstres
 * Etape 4: Crée un controller "CombatController" qui aura une méthode startFight
 * Etape 5: Liée le lien html avec la méthode du Fight
 * Etape 6: Le fight affichera un combat entre le joueur et le monstre séléctionner
 */

