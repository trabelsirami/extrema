<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType1;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ViewClientController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/index", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request,UserPasswordEncoderInterface $encoder): Response
    {
        $User=new User();
        $form=$this->createForm(UserType::class,$User);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $User->setRoles(['ROLE_USER']);
            $User->setPassword($encoder->encodePassword($User,$User->getPassword()));
            $em=$this->getDoctrine()->getManager();
            $em->persist($User);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }
        return $this->render('user/inscription.html.twig',[
            'form' => $form->createView(),
        ]);

    }
    /**
     * @Route("/activities", name="activities")
     */
    public function activities(): Response
    {
        return $this->render('activities.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/admindash", name="admindash")
     */
    public function admindash(): Response
    {
        return $this->render('admindash.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
