<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ot_trabajo;
use Symfony\Component\HttpFoundation\Request;

class Ot_trabajoController extends Controller
{
    /**
     * @Route("/trabajos/all", name="get_allTrabajos")
     * @method({"GET"})
     */
    public function getAll() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("AppBundle:Ot_trabajo");
        $trabajos = $repository->findAll();
        $trabajos = $this->get('serializer')->serialize($trabajos, 'json');
        $response = new Response($trabajos);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /**
     * @Route("/trabajos/get/{id}", name="get_simple")
     * @method({"GET"})
     */
    public function getTrabajo($id) {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Ot_trabajo');
        $trabajo = $repository->find($id);
        
        $trabajo = $this->get('serializer')->serialize($trabajo, 'json');
        $response = new Response($trabajo);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /**
     * @Route("/trabajos/getByEstado/{idEstado}", name="get_byEstado")
     * @method({"GET"})
     */
    public function getByEstado($idEstado) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Ot_trabajo');
        $trabajos = $repository->findBy(array("fkEstado" => $idEstado));
        
        $trabajos = $this->get('serializer')->serialize($trabajos, 'json');
        $response = new Response($trabajos);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /**
     * @Route("/trabajos/update/{id}/", name="update_trabajo")
     * @method({"PUT"})
     */
    public function updateTrabajo($id,Request $request) {
        $em = $this->getDoctrine()->getManager();
        //$req = $em->getRepository('AppBundle:Ot_trabajo')->find($id);
        $req = $em->getRepository(Ot_trabajo::class)->find($id);
        
        if (!$req) {
            throw $this->createNotFoundException(
                "El requerimiento Nº: ".$id ."no existe");
        }
        
        
        /*$fini = $request->request->get("fini");
        $ffin = $request->request->get("ffin");
        $rutRes = $request->request->get("rutRes");*/
        $estado = $request->request->get("fkEstado");
        
        /*$objReq->setFIni($fini);
        $objReq->setFFin($ffin);
        $objReq->setRutRes($rutRes);*/
        $req->setfkEstado($estado);
        
        $em->flush();
        
        return new  Response("Se modificó el Requerimiento Nº: ".$id . "nuevo estado: ".$estado);
    }
    
    /**
     * @Route("/trabajos/new", name="nuevo_trabajo")
     * @method({"POST"})
     */
    public function newTrabajo(Request $request) {
        $trabajo = new  Ot_trabajo();
        
        $fecha = $request->request->get("fecha");
        $rut_soli = $request->request->get("rut_soli");
        $sec_desde = $request->request->get("sec_desde");
        $anexo = $request->request->get("anexo");
        $sec_para = $request->request->get("sec_para");
        $desc = $request->request->get("desc");
        $titulo = $request->request->get("titulo");
        $img = $request->request->get("img");
        $fini = $request->request->get("fini");
        $ffin = $request->request->get("ffin");
        $rut_res = $request->request->get("rut_res");
        $estado = $request->request->get("estado");
        
        $trabajo->setFecha(new \ DateTime($fecha));
        $trabajo->setRutSolicita($rut_soli);
        $trabajo->setSecDesde($sec_desde);
        $trabajo->setAnexo($anexo);
        $trabajo->setSecPara($sec_para);
        $trabajo->setDescripcion($desc);
        $trabajo->setTitulo($titulo);
        $trabajo->setImg($img);
        $trabajo->setFIni($fini);
        $trabajo->setFFin($ffin);
        $trabajo->setRutRes($rut_res);
        $trabajo->setFkEstado($estado);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($trabajo);
        $em->flush();
        
        return  new  Response("Folio del requerimiento: ". $trabajo->getId());
    }
}
