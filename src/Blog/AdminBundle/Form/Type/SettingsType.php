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
            ->add('body')
            ->add('sidebarAbout')
            ->add('metaName')
            ->add('metaDescription')
            ->add('pages')
            ->add('adSpaceHorizontal')
            ->add('adSpaceVertical')
            ->add('github')
            ->add('twitter')
            ->add('facebook')
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
