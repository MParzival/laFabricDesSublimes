<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                    'label' => false,
                    'attr'=>[
                        'placeholder' => 'Votre email : '
                    ]
                ]
        )
            ->add('nom', TextType::class, [
                'label' => false,
                'attr'=>[
                    'placeholder' => 'Votre nom et prénom : '
                ]
            ])

            ->add('phone', TextType::class,[
                'label' => false,
                'attr'=>[
                    'placeholder'=>'Votre téléphone (si vous le souhaitez)'
                ]
            ])
            ->add('sujet', TextType::class, [
                'label' => false,
                'attr'=>[
                    'placeholder'=>'Sujet'
                ]
            ])
            ->add('fabric', TextType::class, [
                'label'=> false,
                'attr'=>[
                    'placeholder'=>'Comment avez-vous connu La Fabric des Sublimés'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => false,
                'attr'=>[
                    'placeholder'=>'Votre beau message',
                    'rows'=> 10
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
