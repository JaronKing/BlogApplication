<?php

namespace Blog\MainBundle\Controller;

use Blog\AdminBundle\Entity\Message;
use Blog\AdminBundle\Form\Type\MessageType;
use Blog\AdminBundle\Controller\MessageController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $offset = $page * 10;
        $posts = $em->getRepository('BlogAdminBundle:Post')->findAll(
            array(),
            array(),
            10,
            $offset
        );
        return $this->render('BlogMainBundle:Default:index.html.twig', array(
            'posts' => $posts,
            'currentPage' => $page
        ));
    }

    public function postAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('BlogAdminBundle:Post')->find($id);
        if (!$post) {
            return $this->render('BlogMainBundle:Default:notFound.html.twig');
        }
        $messages = $post->getMessages();

        $entity = new Message;
        $form = $this->createForm(new MessageType(), $entity, array(
            'action' => $this->generateUrl('blog_main_post', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setPost($post);
            $entity->setCreatedBy($this->getUser());
            $entity->setDateCreated(new \DateTime('now'));
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('blog_main_post', array( 'id' => $id )));
        }

        return $this->render('BlogMainBundle:Default:post.html.twig', array(
            'post' => $post,
            'messages' => $messages,
            'form' => $form->createView()
        ));
    }

    public function footerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $settings = $em->getRepository('BlogAdminBundle:Settings')->findOneBy( array( 'id' => 1 ) );
        return $this->render('BlogMainBundle:Default:footer.html.twig', array(
            'settings' => $settings
        ));
    }

    public function sidebarAboutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $settings = $em->getRepository('BlogAdminBundle:Settings')->findOneBy( array('id' => 1) );
        if (!$settings) {
            $settings = null;
        }
        return $this->render('BlogMainBundle:Default:sidebar.html.twig', array(
            'settings' => $settings
        ));
    }

    public function mainMetaTagAction()
    {
        $em = $this->getDoctrine()->getManager();
        $settings = $em->getRepository('BlogAdminBundle:Settings')->findOneBy( array('id' => 1) );
        return $this->render('BlogMainBundle:Default:meta.html.twig', array(
            'settings' => $settings
        ));
    }

    public function aboutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $settings = $em->getRepository('BlogAdminBundle:Settings')->findOneBy( array('id' => 1) );
        return $this->render('BlogMainBundle:Default:about.html.twig', array(
            'settings' => $settings
        ));
    }

    public function socialLinksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BlogAdminBundle:Settings')->findOneBy(array('id' => 1));
        if (!$entity) {
            $entity = array();
        }
        return $this->render('socialLinks.html.twig', array(
            'entity' => $entity,
        ));
    }
}
