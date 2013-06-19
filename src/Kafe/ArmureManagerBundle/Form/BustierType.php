<?php

namespace Kafe\ArmureManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BustierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('defenseMinimale', 'text')
            ->add('defenseMaximale', 'text')
            ->add('resistancesElementaires', new ResistancesElementairesType() )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kafe\ArmureManagerBundle\Entity\Bustier'
        ));
    }

    public function getName()
    {
        return 'kafe_armuremanagerbundle_bustiertype';
    }
}
