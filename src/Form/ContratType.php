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

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('validitedu')
            ->add('validiteau')
            ->add('photo_cin',FileType::class)
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
