<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManagerController extends AbstractController
{
    private $entityManager;

    /**
     * @return Response
     * @Route("/manager/home", name="manager")
     * @throws \Exception
     *
     * @IsGranted("ROLE_MANAGER")
     */
    public function manager(EntityManagerInterface $entityManager): Response
    {
        $this->entityManager = $entityManager;
        $chambresNonNettoyer = $this->chambresNonNettoyer();
        $employeList = $this->employeList($entityManager);

        return $this->render('manager/manager.html.twig', [
            'chambresNonNettoyer' => $chambresNonNettoyer,
            'employeList' => $employeList,
        ]);
    }

    private function chambresNonNettoyer()
    {
        $chambresNonNettoyer = $this->entityManager->getRepository(Chambre::class)->findBy(array('idStatus' => '3', 'idEmploye' => null));
        return $chambresNonNettoyer;
    }

    private function employeList(EntityManagerInterface $entityManager)
    {
        $sqlRequest = "SELECT * FROM `user` WHERE `roles` LIKE '%ROLE_EMPLOYE%'";
        $sth = $entityManager->getConnection()->prepare($sqlRequest);
        $sth->execute();
        $employeList = $sth->fetchAll();
        return $employeList;
    }

    /**
     * @return Response
     * @Route("/manager/attribution/{numero}")
     * @throws \Exception
     *
     * @IsGranted("ROLE_MANAGER")
     */
    public function managerAttribution(EntityManagerInterface $entityManager, int $numero): Response
    {
        $this->entityManager = $entityManager;
        $employeList = $this->employeList($entityManager);
        return $this->render('manager/attribution.html.twig', [
            'numero' => $numero,
            'employeList' => $employeList,
        ]);
    }

    /**
     * @return Response
     * @Route("/manager/attribution/{numero}/{idEmploye}")
     * @throws \Exception
     *
     * @IsGranted("ROLE_MANAGER")
     */
    public function managerUpdate(EntityManagerInterface $entityManager, int $numero, int $idEmploye): Response
    {
        $this->entityManager = $entityManager;
        $chambreUpdate = $this->entityManager->getRepository(Chambre::class)->findOneBy(array('numero' => $numero));
        $chambreUpdate->setIdEmploye($idEmploye);
        $this->entityManager->persist($chambreUpdate);
        $this->entityManager->flush();
        return $this->redirect("../../home", 301);
    }
}
