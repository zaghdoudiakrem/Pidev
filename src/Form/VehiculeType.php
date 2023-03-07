<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule')
            ->add('marque',  ChoiceType::class, [
                'choices' => [
                    'Ford' => 'Ford',
                    'Toyota' => 'Toyota',
                    'Honda' => 'Honda',
                    'BMW' => 'BMW',
                    'Mercedes' => "Mercedes",
                    'Range Rover' => "Range Rover",
                    'Kia' => "Kia",
                    "Ibiza" => "Ibiza",
                    "Hyundai" => "Hyundai",
                    "Haval" => "Haval",
                    "Symbole" => "Symbole",
                    "Clio" => "clio",
                    "Citroen" => "Citroen",
                ],
                'placeholder' => 'Veuillez choisir une marque de véhicule valide',
                ])

            ->add('type' , ChoiceType::class, [
                'choices' => [
                    'Voiture' => 'voiture',
                    'Moto' => 'moto',
                    'Camion' => 'camion',
                ],
                'placeholder' => 'Veuillez choisir un type de véhicule valide',
                ])
            ->add('nb_ch')
            ->add('id_client' ,HiddenType::class, [
                              'data' =>$options['id_client'],
           ])   
            ->add('id_contrat',HiddenType::class, [
                              'data' =>$options['id_contrat'],
           ])     

           ->add('captcha', CaptchaType::class)
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
