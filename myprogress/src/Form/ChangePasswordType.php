<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'disabled' => true,
                'label' => 'Email'
            ])
            ->add('old_password', PasswordType::class,[
                'label' => 'Mot de passe',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Mon mot de passe actuel'
                ]
            ])
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'Le mot de passe et la comfirmation doivent être identique.',
                'label' => 'Nouveau mot de passe',
                'constraints' => new Length([
                    'min' => 6,
                    'max' => 60
                ]),
                'required' => true,
                'first_options' => [
                    'label' => 'Nouveau mot de passe',
                    'attr' => [
                        'placeholder' => '6 carracteres minimum'
                    ]],
                'second_options' => [
                    'label' => 'Comfirmez nouveau mot de passe',
                    'attr' => [
                        'placeholder' => '6 carracteres minimum'
                    ]],

            ])
            ->add('firstname', TextType::class, [
                'disabled' => true,
                'label' => 'Prenom'
            ])
            ->add('lastname',TextType::class, [
                'disabled' => true,
                'label' => 'Nom'
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays'
            ])
            ->add('city', TextType::class,[
                'label' => 'Ville'
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
