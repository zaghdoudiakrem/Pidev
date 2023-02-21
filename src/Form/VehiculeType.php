<?php

namespace App\Form;

use App\Entity\Vehicule;
use App\Entity\User;
use App\Entity\Contrat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule')
            ->add('marque')
            ->add('type')
            ->add('nb_ch')
            ->add('id_client' ,EntityType::class, [
                            'class' => User::class,
                            'choice_label' => 'id',
                            'multiple' => false,
                            'expanded' => false,
            
                        ])
            ->add('id_contrat',EntityType::class, [
                            'class' => Contrat::class,
                            'choice_label' => 'id',
                            'multiple' => false,
                            'expanded' => false,
            
                        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
            "id_client" => null ,
            "id_contrat" => null ,

        ]);
    }
}
