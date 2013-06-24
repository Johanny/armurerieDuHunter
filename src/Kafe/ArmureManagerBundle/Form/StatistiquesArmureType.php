<?php

namespace Kafe\ArmureManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StatistiquesArmureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('defenseMinimale', 'integer')
            ->add('defenseMaximale', 'integer')
            ->add('rarete', 'integer')
            ->add('resistanceFeu', 'integer')
            ->add('resistanceEau', 'integer')
            ->add('resistanceGlace', 'integer')
            ->add('resistanceFoudre', 'integer')
            ->add('resistanceDragon', 'integer')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kafe\ArmureManagerBundle\Entity\StatistiquesArmure'
        ));
    }

    public function getName()
    {
        return 'kafe_armuremanagerbundle_statistiquesarmuretype';
    }
}
