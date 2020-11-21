<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeController extends AbstractController
{
    private $entityManager;

    /**
     * @return Response
     * @Route("/employe/home", name="employe")
     * @throws \Exception
     *
     * @IsGranted("ROLE_EMPLOYE")
     */
    public function employe(EntityManagerInterface $entityManager): Response
    {
        $this->entityManager = $entityManager;
        $countChambre = $this->countChambre();
        $chambresAFaire = $this->chambresAFaire();

        return $this->render('employe/employe.html.twig', [
            'countChambre' => $countChambre,
            'chambresAFaire' => $chambresAFaire,
        ]);
    }

    /**
     * @return Response
     * @Route("/employe/terminer/{numero}")
     * @throws \Exception
     *
     * @IsGranted("ROLE_EMPLOYE")
     */
    public function managerUpdate(EntityManagerInterface $entityManager, int $numero): Response
    {
        $this->entityManager = $entityManager;
        $chambreUpdate = $this->entityManager->getRepository(Chambre::class)->findOneBy(array('numero' => $numero));
        $chambreUpdate->setIdStatus(2);
        $chambreUpdate->setIdEmploye(NULL);
        $this->entityManager->persist($chambreUpdate);
        $this->entityManager->flush();
        return $this->redirect("../home", 301);
    }

    private function chambresAFaire()
    {
        $idUser = $this->idUser();
        $chambresAFaire = $this->entityManager->getRepository(Chambre::class)->findBy(array('idStatus' => '3', 'idEmploye' => $idUser));
        return $chambresAFaire;
    }

    private function countChambre()
    {
        $idUser = $this->idUser();
        $sqlRequest = "SELECT count(*) FROM `chambre` WHERE `id_status` = '3' AND `id_employe` = '$idUser'";
        $sth = $this->entityManager->getConnection()->prepare($sqlRequest);
        $sth->execute();
        $countSelect = $sth->fetchAll();
        return $countSelect[0]['count(*)'];
    }

    private function idUser()
    {
        $username = $_SESSION['_sf2_attributes']['_security.last_username'];
        $sqlRequest = "SELECT `id` FROM `user` WHERE `roles` LIKE '%ROLE_EMPLOYE%' AND `username` = '$username' LIMIT 1";
        $sth = $this->entityManager->getConnection()->prepare($sqlRequest);
        $sth->execute();
        $idUser = $sth->fetchAll();
        return $idUser[0]['id'];
    }
}
