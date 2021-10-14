<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;


class LuckyController
{
        /**
        * @Route("/lucky/number/{id}" , methods={"GET","HEAD"})
        */
    public function number(int $id)
    {
        $number = $id;

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
