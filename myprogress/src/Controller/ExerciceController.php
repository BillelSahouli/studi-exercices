<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Exercice;
use App\Entity\Performance;
use App\Form\PerformanceType;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    private $entityManager;

    /**
     * ExerciceController constructor.
     * @param $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }


    /**
     * @Route("/les-exercices", name="exercices")
     */
    public function index(Request $request): Response
    {

        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $exercices = $this->entityManager->getRepository(Exercice::class)->findWithSearch($search);
        }else{
            $exercices = $this->entityManager->getRepository(Exercice::class)->findAll();
        }

        return $this->render('exercice/index.html.twig',[
            'exercices' => $exercices,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/mon-exercice/{id}", name="exercice")
     */
    public function show($id,Exercice $exr, Request $request): Response
    {
        $notification = null;
        $performance = new Performance();

        $ex = $this->entityManager->getRepository(Exercice::class);
        $exercice = $ex->findOneById($id);


        $form = $this->createForm(PerformanceType::class, $performance);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $performance->setUser($this->getUser());
            $performance->setExercice($exercice);

            $this->entityManager->persist($performance);
            $this->entityManager->flush();

            return $this->redirectToRoute('exercice', ['id'=> $exr->getId()]);

        }elseif ($form->isSubmitted() && !$form->isValid()){
            $notification = "Tu a mal remplis les informations !";

        }else{
            $notification = null;
        }

        if (!$exercice){
            return $this->redirectToRoute('exercices');
        }

        return $this->render('exercice/show.html.twig',[
            'exercice' => $exercice,
            'notification' => $notification,
            'form' => $form->createView(),
            ]);
    }
}
