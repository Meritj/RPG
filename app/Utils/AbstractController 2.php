<?php

namespace Rpg\Utils;

require_once __DIR__.'/../../config/bootstrap.php';

abstract class AbstractController
{
protected $em; // fait référence à Entity Manager, l'instance de notre entity manager est stockée dans tous les 
                // objets dans les dossiers parents 

public function __construct()
{
    $this->em = GetEntityManager(); 
}

public function render(string $file, array $variables){
    ob_start();     // ob_start() démarre la mémoire tampon. 
                    //Tant qu'elle est enclenchée, aucune donnée, hormis les en-têtes, n'est envoyée au navigateur,
                    // mais temporairement mise en tampon.
                    // Pour copier le contenant dans un string : ob_gets_content.
                    // Pour AFFICHER ce contenu, on utilise ob_end_flush()

                    // elle permet de séparer le HTML du code normal. 

    extract($variables);
    include sprintf( __DIR__ .'/../../templates/%s',$file);
    echo ob_get_clean(); // nettoie la mémoire tampn  et aussi permet de récupérer les informations 

}
}