<?php
// src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render('bezoker/number.html.twig', ['number' => $number]);


//        return new Response(
////            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }
        #[Route('/Home')]
          public function HomePage(): Response
    {
        $date =date('L\t\h\e\ js');
        return  $this->render('bezoker/home.html.twig', ['HomePage'=>$date]);

    }

}