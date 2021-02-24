<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
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
            ->add('submit',SubmitType::class,[
                'label' => 'Modifier'
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
