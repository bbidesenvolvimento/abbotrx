<?php

namespace Bbi\AbbotRx\VisitaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BbiAbbotRxBundle:Default:index.html.twig', array('name' => $name));
    }
}
