<?php

namespace EsqueletBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

  /**
   * @Route("/all", name="all")
   */
  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $futbol = $repository->findAll();
      return $this->render('EsqueletBundle:Default:all.html.twig',array("evento"=>$futbol));
  }

  /**
   * @Route("/calendario_y_horarios", name="calendario_y_horarios")
   */
  public function calendarioAction()
  {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
      return $this->render('EsqueletBundle:Default:calendario_y_horarios.html.twig',array("futbol"=>$calendar));
  }

    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:inicio.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/noticias", name="noticias")
     */
    public function noticiasAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:noticias.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/inscripciones", name="inscripciones")
     */
    public function inscripcionesAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:inscripciones.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/instalaciones", name="instalaciones")
     */
    public function instalacionesAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:instalaciones.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:contacto.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/plantilla", name="plantilla")
     */
    public function plantillaAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:plantilla.html.twig',array("futbol"=>$calendar));
    }





    /**
     * @Route("/nombre/{nombre}", name="nombre")
     */
    public function plantillaPorNombreAction($nombre)
    {
        $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
        //buscar por nombre
        $cervezas = $repository->findByNombre($nombre);
        //
        return $this->render('EsqueletBundle:Default:nombre.html.twig',array("futbol"=>$nombre));
    }




    /**
     * @Route("/resultados_y_clasificacion", name="resultados_y_clasificacion")
     */
    public function resultados_y_clasificacionAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:resultados_y_clasificacion.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/rankings", name="rankings")
     */
    public function rankingsAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:rankings.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/mi_perfil", name="mi_perfil")
     */
    public function mi_perfilAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:mi_perfil.html.twig',array("futbol"=>$calendar));
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function registroAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletBundle:Carlet');
      // find *all* datos
      $calendar = $repository->findAll();
        return $this->render('EsqueletBundle:Default:registro.html.twig',array("futbol"=>$calendar));
    }


}
