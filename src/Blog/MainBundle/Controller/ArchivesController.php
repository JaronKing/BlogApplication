<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArchivesController extends Controller
{
    public function indexAction($date)
    {
        $date = urldecode($date);
        $start = new \DateTime($date);
        $end = new \DateTime( \date('Y-m-t', strtotime($date)) );
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('BlogAdminBundle:Post')->findPostsByTime($start, $end);
        return $this->render('BlogMainBundle:Default:index.html.twig', array(
            'posts' => $posts,
            'currentPage' => 1
        ));
    }
}
