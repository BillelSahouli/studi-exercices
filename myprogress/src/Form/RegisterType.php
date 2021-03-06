<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 60
                ]),
                'attr' => [
                    'placeholder' => 'ex : MrJack@outlook.fr'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Le mot de passe et la comfirmation doivent être identique.',
                'label' => 'Votre Mot De Passe',
                'constraints' => new Length([
                    'min' => 6,
                    'max' => 60
                ]),
                'required' => true,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => [
                    'placeholder' => '6 carracteres minimum'
                ]],
                'second_options' => [
                    'label' => 'Comfirmez votre mot de passe',
                    'attr' => [
                        'placeholder' => '6 carracteres minimum'
                    ]],

            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 20
                ]),
                'attr' => [
                    'placeholder' => 'Prénom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'constraints' => new Length([
                    'min' => 2,
                    'max' => 40
                ]),
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'attr' => [
                    'placeholder' => 'Pays'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'attr' => [
                    'placeholder' => 'Ville'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
