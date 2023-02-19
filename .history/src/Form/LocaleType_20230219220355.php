<?php

namespace App\Form;

use App\Entity\Locale;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocaleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse'TextType::class, [
                'label' => 'Description',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Champs Description est obligatoire'
                    ]   )
                ],
                
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                ],
            ]))
            ->add('id_mecanicien')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Locale::class,
        ]);
    }
}
