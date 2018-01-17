<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ot_estado;
use Symfony\Component\HttpFoundation\JsonResponse;

class EstadoController extends Controller
{
    /**
     * @Route("/estados/getAll",name="get_estados")
     * @method({"GET"})
     */
    public  function getAll() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Ot_estado');
        $estados = $repository->findAll();
        
        $estados = $this->get('serializer')->serialize($estados, 'json');
        
        $response = new Response($estados);
        
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        
    }
}
