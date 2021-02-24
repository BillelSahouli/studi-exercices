<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

    /**
     * RegisterController constructor.
     * @param $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }


    /**
     * @Route("/inscription", name="register")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $notification = null;

        $user = new User();
        $form = $this->createForm(RegisterType::class,$user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $user = $form->getData();

            $search_email = $this->entityManager->getRepository(User::class)->findByEmail($user->getEmail());

            if (!$search_email){
                $password = $encoder->encodePassword($user, $user->getPassword());

                $user->setPassword($password);

                $this->entityManager->persist($user);
                $this->entityManager->flush();
                $mail = new Mail();
                $content = "Bonjour".$user->getFirstname()."<br/>Bienvenue sur la première plateforme a proposé un systeme de gestion de vos performances en musculation";
                $mail->send($user->getEmail(),$user->getFirstname(),"L'équipe MYPROGRESS vous souhaite la bienvenue", $content);
                $notification = "Inscription Réussie";
            }else{
                $notification = "Email déja éxistant";
            }
        }

        return $this->render('register/index.html.twig',[
            'form' => $form->createView(),
            'notification' => $notification,
        ]);
    }
}
