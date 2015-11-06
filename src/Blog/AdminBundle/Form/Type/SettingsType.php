<?php

namespace Blog\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SettingsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body', 'textarea', array(
                'attr' => array( 'class' => 'form-control wysiwyg' )
            ))
            ->add('sidebarAbout')
            ->add('metaName')
            ->add('metaDescription')
            ->add('pages')
            ->add('adSpaceHorizontal')
            ->add('adSpaceVertical')
            ->add('github')
            ->add('twitter')
            ->add('facebook')
            ->add('linkedin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\AdminBundle\Entity\Settings'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_adminbundle_settings';
    }
}
