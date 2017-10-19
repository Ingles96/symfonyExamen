<?php

namespace EsqueletBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction()
    {
        return $this->render('EsqueletBundle:Default:inicio.html.twig');
    }

    /**
     * @Route("/noticias", name="noticias")
     */
    public function noticiasAction()
    {
        return $this->render('EsqueletBundle:Default:noticias.html.twig');
    }

    /**
     * @Route("/inscripciones", name="inscripciones")
     */
    public function inscripcionesAction()
    {
        return $this->render('EsqueletBundle:Default:inscripciones.html.twig');
    }

    /**
     * @Route("/instalaciones", name="instalaciones")
     */
    public function instalacionesAction()
    {
        return $this->render('EsqueletBundle:Default:instalaciones.html.twig');
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        return $this->render('EsqueletBundle:Default:contacto.html.twig');
    }

    /**
     * @Route("/plantilla", name="plantilla")
     */
    public function plantillaAction()
    {
        return $this->render('EsqueletBundle:Default:plantilla.html.twig');
    }

    /**
     * @Route("/calendario_y_horarios", name="calendario_y_horarios y horarios")
     */
    public function calendarioAction()
    {
        return $this->render('EsqueletBundle:Default:calendario_y_horarios.html.twig');
    }

    /**
     * @Route("/resultados_y_clasificacion", name="resultados_y_clasificacion")
     */
    public function resultados_y_clasificacionAction()
    {
        return $this->render('EsqueletBundle:Default:resultados_y_clasificacion.html.twig');
    }

    /**
     * @Route("/rankings", name="rankings")
     */
    public function rankingsAction()
    {
        return $this->render('EsqueletBundle:Default:rankings.html.twig');
    }

    /**
     * @Route("/mi_perfil", name="mi_perfil")
     */
    public function mi_perfilAction()
    {
        return $this->render('EsqueletBundle:Default:mi_perfil.html.twig');
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function registroAction()
    {
        return $this->render('EsqueletBundle:Default:registro.html.twig');
    }
}
