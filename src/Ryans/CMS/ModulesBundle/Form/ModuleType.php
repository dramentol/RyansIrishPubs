<?php

namespace Ryans\CMS\ModulesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ModuleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('text')
            ->add('image')
            ->add('alt')
            ->add('active')
            ->add('location')
            ->add('start_date')
            ->add('end_date')
            ->add('border_color')
            ->add('link')
            ->add('ltitle')
            ->add('order')
            ->add('blank')
            ->add('moduleType')
        ;
    }

    public function getName()
    {
        return 'ryans_cms_modulesbundle_moduletype';
    }
}
