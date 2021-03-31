<?php

namespace App\Controller;

use App\Repository\GroupRepository;
use App\Repository\ClientgroupsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gg")
 */
class ClientgroupsController extends AbstractController
{
    /**
     * @Route("/clientgroupsss", name="clientgroups")
     */
    public function indexx(): Response
    {
        return $this->render('clientgroups/index.html.twig', [
            'controller_name' => 'ClientgroupsController',
        ]);
    }

    /**
     * @Route("/clientgroups", name="clientgroups" , methods={"GET"})
     *
     */
    public function index(GroupRepository $groupRepository): Response
    {
        return $this->render('clientgroups/gg.html.twig', [

            'groups' => $groupRepository->findAll(),
        ]);
    }
    /**
     * @Route("/searchclientgroups", name="clientgroups" )
     *
     */
    public function search(GroupRepository $groupRepository,Request $request): Response
    {

            $data=$request->get('search');
        $groups=$groupRepository->findBy(['nom'=>$data]);
        return $this->render('clientgroups/gg.html.twig', [
            'groups' => $groups,
        ]);

    }
}
