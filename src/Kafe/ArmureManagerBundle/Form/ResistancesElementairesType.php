<?php

namespace Kafe\ArmureManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResistancesElementairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('resistanceFeu', 'text')
            ->add('resistanceEau', 'text')
            ->add('resistanceGlace', 'text')
            ->add('resistanceFoudre', 'text')
            ->add('resistanceDragon', 'text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kafe\ArmureManagerBundle\Entity\ResistancesElementaires'
        ));
    }

    public function getName()
    {
        return 'kafe_armuremanagerbundle_resistanceselementairestype';
    }
}
