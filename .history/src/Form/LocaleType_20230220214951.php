<?php

namespace App\Form;

use App\Entity\Locale;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use \EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocaleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse',TextType::class, [
                'label' => 'Adresse',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Champs Adresse est obligatoire'
                    ] )
                ],    
                'attr' => [
                    'class' => 'form-control',   
                ],
            ])

            ->add('id_mecanicien',EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'multiple' => false,
                'expanded' => false,

            ]);     
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Locale::class,
            
        ]);
    }
}
