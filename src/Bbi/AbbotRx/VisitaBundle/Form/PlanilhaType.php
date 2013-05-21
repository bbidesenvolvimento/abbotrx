<?php

namespace Bbi\AbbotRx\VisitaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanilhaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('local')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bbi\AbbotRx\VisitaBundle\Entity\Planilha'
        ));
    }

    public function getName()
    {
        return 'bbi_abbotrx_visitabundle_planilhatype';
    }
}
