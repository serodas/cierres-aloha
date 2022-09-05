<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;

class CierreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fecha',TextType::class,array(
            "attr"=>array("class"=>"js-datepicker form-control")
        ))
        ->add('terminal',EntityType::class,array(
            "class"=>"AppBundle:Terminal",
            "attr"=>array("class"=>"form-control"),
            "query_builder"=>function(EntityRepository $er){
                return $er->createQueryBuilder('t')
                    ->orderBy('t.name','ASC');
            },
            'placeholder' => 'Seleccione...' 
        ))
        ->add('digitado',IntegerType::class,array(
            "label"=>"Valor Entregado en Efectivo",
            "attr"=>array("class"=>"form-control")
        ))
        ->add('guardar',SubmitType::class,array(
            "attr"=>array("class" => "form-submit btn btn-primary")
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cierre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cierre';
    }


}
