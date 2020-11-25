<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginFormAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, EntityManagerInterface $entityManager ,UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        $selectAllUsers = $this->selectAllUsers($entityManager);

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'selectAllUsers' => $selectAllUsers
        ]);
    }

    /**
     * @return Response
     * @Route("/register/{id}")
     * @throws \Exception
     */
    public function deleteWithId(EntityManagerInterface $entityManager, int $id): Response
    {
        $this->entityManager = $entityManager;
        $deleteUser = $this->entityManager->getRepository(User::class)->findOneBy(array('id' => $id));
        $this->entityManager->remove($deleteUser);
        $this->entityManager->flush();
        return $this->redirect("../register", 301);
    }

    private function selectAllUsers(EntityManagerInterface $entityManager)
    {
        $selectAllUsers = $entityManager->getRepository(User::class)->findAll();
        return $selectAllUsers;
    }
}
