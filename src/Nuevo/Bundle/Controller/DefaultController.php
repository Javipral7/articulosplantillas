<?php

namespace Nuevo\Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NuevoBundle:Default:index.html.twig', array('name' => $name));
    }
}
