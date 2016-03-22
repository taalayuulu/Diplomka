<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Page:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('AppBundle:Page:contact.html.twig');
    }

}

