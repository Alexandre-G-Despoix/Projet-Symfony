<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\UserBundle\Model\UserManagerInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/create-user", name="create_user")
     */
    public function createUser(UserManagerInterface $userManager): Response
    {
        // Créer un nouvel utilisateur
        $user = $userManager->createUser();
        // Définir les propriétés de l'utilisateur...

        // Attribuer le rôle d'administrateur
        $user->addRole('ROLE_ADMIN');

        // Enregistrer l'utilisateur
        $userManager->updateUser($user);

        // Répondre avec une confirmation ou rediriger...
    }
}
