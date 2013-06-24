<?php

namespace Kafe\ArmureManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statistiquesArmure', new StatistiquesArmureType)
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kafe\ArmureManagerBundle\Entity\Tete'
        ));
    }

    public function getName()
    {
        return 'kafe_armuremanagerbundle_tetetype';
    }
}
