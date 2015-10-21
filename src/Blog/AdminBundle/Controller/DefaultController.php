<?php

namespace Blog\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\AdminBundle\Entity\MessageRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $start = date('Y-m-d 00:00:00');
        $end = date('Y-m-d 24:59:59');
        $newMessages = $em->getRepository('BlogAdminBundle:Message')->findMessagesByTime($start, $end);
        $newMessageCount = count($newMessages);
        $blogPosts = $em->getRepository('BlogAdminBundle:Post')->findAll();
        $blogPostsCount = count($blogPosts);
        return $this->render('BlogAdminBundle:Default:index.html.twig', array(
            'messageCount' => $newMessageCount,
            'postCount' => $blogPostsCount
        ));
    }
}
