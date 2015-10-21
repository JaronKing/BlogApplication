<?php

namespace Blog\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('body', 'textarea', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('tag', 'entity', array(
                'class' => 'BlogAdminBundle:Tag',
                'property' => 'name',
                'required' => false,
                'multiple' => true,
                'mapped' => true,
                'attr' => array( 'class' => 'form-control' )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\AdminBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_adminbundle_post';
    }
}
