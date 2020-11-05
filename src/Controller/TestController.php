<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;


class TestController extends AbstractController
{
    /**
     *@Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test.html.twig');
    }
}
