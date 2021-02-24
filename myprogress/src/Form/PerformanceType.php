<?php

namespace App\Form;

use App\Entity\Performance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;

class PerformanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class,[
                'label' => 'Date de la performance',
                'format' => 'ddMMyyyy',
                'attr' => [
                    'class' => 'custom-date'
                ],
                'label_attr'=>[
                    'class' => 'custom-label'
                ],
            ])
            ->add('weight', NumberType::class,[
                'label' => 'Poids',
                'constraints' => new Positive([]),
                'attr' => [
                    'min' => 1,
                    'max' => 500,
                    'class' => 'custom-weight'
                ],
                'label_attr'=>[
                    'class' => 'custom-label'
                ],
            ])
            ->add('repetition', NumberType::class,[
                'label' => 'Répétitions',
                'constraints' => new Positive([]),
                'attr' => [
                    'min' => 1,
                    'max' => 200,
                    'class' =>'custom-repetition'
                ],
                'label_attr'=>[
                    'class' => 'custom-label'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Performance::class,
        ]);
    }
}
