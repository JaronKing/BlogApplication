<?php

namespace Blog\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userName', 'text', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('email', 'text', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('enabled', 'checkbox', array(
                'attr' => array( 'class' => 'form-control' )
            ))
            ->add('password')
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_userbundle_user';
    }
}
