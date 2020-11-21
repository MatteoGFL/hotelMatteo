<?php

namespace App\Controller;

use App\Entity\Chambre;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReceptionnisteController extends AbstractController
{
    private $entityManager;

    /**
     * @return Response
     * @Route("/receptionniste/home", name="receptionniste")
     * @throws \Exception
     *
     * @IsGranted("ROLE_RECEPTIONNISTE")
     */
    public function receptionniste(EntityManagerInterface $entityManager): Response
    {
        $this->entityManager = $entityManager;
        $chambresLibres = $this->chambresLibres();
        $chambresANettoyer = $this->chambresANettoyer();
        return $this->render('receptionniste/receptionniste.html.twig', [
            'chambresLibres' => $chambresLibres,
            'chambresANettoyer' => $chambresANettoyer
        ]);
    }

    private function chambresLibres()
    {
        $chambresLibres = $this->entityManager->getRepository(Chambre::class)->findBy(array('idStatus' => '2'));
        return $chambresLibres;
    }

    private function chambresANettoyer()
    {
        $chambresLibres = $this->entityManager->getRepository(Chambre::class)->findBy(array('idStatus' => '1'));
        return $chambresLibres;
    }

    /**
     * @return Response
     * @Route("/receptionniste/reserve/{numero}")
     * @throws \Exception
     *
     * @IsGranted("ROLE_RECEPTIONNISTE")
     */
    public function receptionnisteReserve(EntityManagerInterface $entityManager, int $numero): Response
    {
        $this->entityManager = $entityManager;
        $chambreAReserver = $this->entityManager->getRepository(Chambre::class)->findOneBy(array('numero' => $numero));
        $chambreAReserver->setIdStatus(1);
        $this->entityManager->persist($chambreAReserver);
        $this->entityManager->flush();
        return $this->redirect("../home", 301);
    }

    /**
     * @return Response
     * @Route("/receptionniste/a_nettoyer/{numero}")
     * @throws \Exception
     *
     * @IsGranted("ROLE_RECEPTIONNISTE")
     */
    public function receptionnisteAnettoyer(EntityManagerInterface $entityManager, int $numero): Response
    {
        $this->entityManager = $entityManager;
        $chambreAReserver = $this->entityManager->getRepository(Chambre::class)->findOneBy(array('numero' => $numero));
        $chambreAReserver->setIdStatus(3);
        $this->entityManager->persist($chambreAReserver);
        $this->entityManager->flush();
        return $this->redirect("../home", 301);
    }
}
