<?php


namespace Rpg\Utils;

require_once __DIR__ . '/../../config/bootstrap.php';

abstract class AbstractController
{
    protected $em;

    public function __construct()
    {
        $this->em = GetEntityManager();
    }

    public function render(string $file, array $variables)
    {
        // Démarre la mise en mémoire tampon
        ob_start();
        // Extract crée des variables a partir des clef du tableau et ensuite attribue la valeur du tableau a la variable
        extract($variables);

        // Méthode php sur les tableau qui va crée une variable a partir de chaque ligne du tableau
        include sprintf(__DIR__ . '/../../templates/%s', $file);

        echo ob_get_clean();
    }
}
