<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    /**
     * @Route("/findUser")
     */
    public function findUser(UserRepository $userRepository): Response
    {
        $users = $userRepository->findUserWithDQL('nomUtilisateur');

        return new Response('<body>'.$users[1]->getEmail().'</body>' );
    }

    /**
     * @Route("/updateUser/{username}")
     * @param User $user
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function updateUser(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setUsername('newNameUser');

        foreach ($user->getMessages() as $userMessages){
            $userMessages->setTitle('Titre unique pour tout les messages');
        }

        $entityManager->flush();

        dump($user);

        return new Response('<body></body>');
    }

    /**
     * @Route("/remove-user/{username}")
     */
    public function removeUser(User $user, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($user);
        $entityManager->flush();
        return new Response('<body></body>');
    }

    /**
     * @Route("/")
     */
    public function add(Request $request): Response
    {
        $user=new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            dd($form->getData());
        }

        return $this->render('user/add.html.twig',[
            'form'=>$form->createView(),
        ]);
    }
}
