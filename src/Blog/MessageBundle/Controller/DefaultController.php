<?php

namespace Blog\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlogMessageBundle:Default:index.html.twig', array('name' => $name));
    }
}
