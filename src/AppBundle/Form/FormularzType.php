<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormularzType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
        ->add('name', TextType::class, array('label' => 'formularz.name'))
        ->add('surname', TextType::class, array('label' => 'formularz.surname'))
        ->add('email', TextType::class, array('label' => 'formularz.email'))
        ->add('text', TextareaType::class, array('label' => 'formularz.text'))
        ->add('send', SubmitType::class, array('label' => 'formularz.send'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Formularz',
            'translation_domain' => 'formularz', //nazwa pliku bez pl/en.yml
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_formularz';
    }


}
