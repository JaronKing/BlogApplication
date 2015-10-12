<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('BlogAdminBundle:Post')->findAll();
        return $this->render('BlogMainBundle:Default:index.html.twig', array(
            'posts' => $posts
        ));
    }

    public function postAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('BlogAdminBundle:Post')->find($id);
        if (!$post) {
            return $this->render('BlogMainBundle:Default:notFound.html.twig');
        }
        return $this->render('BlogMainBundle:Default:post.html.twig', array(
            'post' => $post
        ));
    }

    public function aboutAction()
    {
        return $this->render('BlogMainBundle:Default:about.html.twig');
    }
}
