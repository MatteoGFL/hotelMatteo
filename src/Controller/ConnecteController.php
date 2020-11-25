<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnecteController extends AbstractController
{
    /**
     * @return Response
     * @Route("/connect/logout", name="logout")
     * @throws \Exception
     */
    public function logout(): Response
    {
        return $this->render('connecte/logout.html.twig', []);
    }
}