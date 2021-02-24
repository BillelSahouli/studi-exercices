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

class MyPerformanceController extends AbstractController
{
    private $entityManager;

    /**
     * MyPerformanceController constructor.
     * @param $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }

    
    /**
     * @Route("/compte/modifier-performance/{id}", name="edit_performance")
     */
    public function edit($id, Request $request): Response
    {

        $performance = $this->entityManager->getRepository(Performance::class)->findOneById($id);

        $form = $this->createForm(PerformanceType::class, $performance)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();
            return $this->redirectToRoute('exercice',['id' => $performance->getExercice()->getId()]);
        }

        return $this->render('my_performance/edit.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/compte/suprimer-performance/{id}", name="delete_performance")
     */
    public function delete(Performance $performance)
    {

        $this->entityManager->remove($performance);

        $this->entityManager->flush();

        return $this->redirectToRoute('exercice',['id' => $performance->getExercice()->getId()]);
    }
}
