<?php

namespace App\Controller;

use App\Repository\ReclamationRepository;
use App\Form\ReclamationType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reclamation;

/**
 * @Route("/mg")
 */
class ManagmentController extends AbstractController
{
    /**
     * @Route("/managment", name="managment", methods={"GET"})
     */

//    public function new(Request $request): Response
//    {
//        $reclamation = new Reclamation();
//        $form = $this->createForm(ReclamationType::class, $reclamation);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($reclamation);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('reclamation_index');
//        }
//
//        return $this->render('managment/reclamation.html.twig', [
//            'reclamation' => $reclamation,
//            'form' => $form->createView(),
//        ]);
//    }
}
