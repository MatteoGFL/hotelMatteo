<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    private $entityManager;

    /**
     * @return Response
     * @Route("/add/chambre", name="chambre")
     * @throws \Exception
     */
    public function chambre(Request $request, EntityManagerInterface $entityManager): Response
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $chambreForm = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chambreForm);
            $entityManager->flush();
            return $this->redirectToRoute('chambre');
        }

        $this->entityManager = $entityManager;
        $selectAllRooms = $this->selectAllRooms($entityManager);

        return $this->render('add/chambre.html.twig', [
            'chambre_form' => $form->createView(),
            'selectAllRooms' => $selectAllRooms
        ]);
    }

    private function selectAllRooms()
    {
        $selectAllRooms = $this->entityManager->getRepository(Chambre::class)->findAll();
        return $selectAllRooms;
    }

    /**
     * @return Response
     * @Route("/add/delete/{numero}")
     * @throws \Exception
     */
    public function deleteWithNumber(EntityManagerInterface $entityManager, int $numero): Response
    {
        $this->entityManager = $entityManager;
        $deleteChambre = $this->entityManager->getRepository(Chambre::class)->findOneBy(array('numero' => $numero));
        $this->entityManager->remove($deleteChambre);
        $this->entityManager->flush();
        return $this->redirect("../chambre", 301);
    }
}
