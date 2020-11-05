<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;


class HomeController extends AbstractController
{
    /**
     *@Route("/", name="home")
     */
    public function index()
    {
        // return new Response('<body style="text-align:center">ACCUEIL</body>');
        return $this->render('home.html.twig');
    }
}
