<?php

namespace App\Form;

use App\Classe\Search;
use App\Entity\Muscle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('string', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre recherche ...'
                ]
            ])
            ->add('muscles', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Muscle::class,
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'placeholder' => 'Votre recherche ...'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Rechercher'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'crsf_protection' => false,
        ]);
    }

    //pour avoir une url clean, car si je met pas cet fonction, dans mon url on va me prefixer un tableau avec ma classe Search
    public function getBlockPrefix()
    {
        return '';
    }
}