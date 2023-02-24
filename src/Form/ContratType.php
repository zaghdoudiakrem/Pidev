<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\Vehicule;
use App\Entity\Offre;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('validitedu')
            ->add('validiteau')
            ->add('photo_cin', FileType::class, [
                'mapped' => false,
        'required' => true,
        'constraints' => [
            new NotBlank([
                'message' => 'svp choisir une image',
            ]),
            new File([
                'maxSize' => '1024k',
                'mimeTypes' => [
                    'image/jpeg',
                    'image/png',
                ],
                'mimeTypesMessage' => 'la format de l image doit etre jpeg ou png',
            ])
        ],
    ])
            ->add('id_vehicule',EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'id',
                'multiple' => false,
                'expanded' => false,

            ])
            ->add('id_client',EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'multiple' => false,
                'expanded' => false,

            ])
            ->add('id_offre')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
