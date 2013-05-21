<?php

namespace Bbi\AbbotRx\VisitaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VisitaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('time')
            ->add('setor')
            ->add('consultor')
            ->add('dataRealizadaPlanejada')
            ->add('dataEquipamento')
            ->add('dataServidor')
            ->add('tipoPerfil')
            ->add('customerId')
            ->add('crmCnpj')
            ->add('nome')
            ->add('especAtuacao')
            ->add('frequencia')
            ->add('visitaAcompanhada')
            ->add('teamId')
            ->add('alignmentId')
            ->add('eventId')
            ->add('programadaNaoprog')
            ->add('tipoVisita')
            ->add('eventType')
            ->add('painel')
            ->add('potencial')
            ->add('statusDaVisita')
            ->add('produto1')
            ->add('produto2')
            ->add('produto3')
            ->add('produto4')
            ->add('produto5')
            ->add('produto6')
            ->add('comentarios')
            ->add('estado')
            ->add('comentarios1')
            ->add('comentarios2')
            ->add('planilha')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bbi\AbbotRx\VisitaBundle\Entity\Visita'
        ));
    }

    public function getName()
    {
        return 'bbi_abbotrx_visitabundle_visitatype';
    }
}
