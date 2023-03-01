<?php 
 
namespace App\Form;

use App\Entity\Constat;
use App\Entity\Vehicule;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;




class ConstatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomclient_e' , TextType::class)
            ->add('prenomclient_e', TextType::class)
            ->add('typevehicule_e', ChoiceType::class, [
                    'choices' => [
                              'Voiture' => 'voiture',
                              'Moto' => 'moto',
                              'Camion' => 'camion',
                ],
                'placeholder' => 'Veuillez choisir un type de véhicule valide',
                ])

            ->add('marquevehicule_e', ChoiceType::class, [
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

            ->add('assuranceclient_e', TextType::class)
            ->add('adresseclient_e', TextType::class)
            ->add('emplacementaccid', TextType::class)
            ->add('photoaccid', FileType::class, [
                'label' => 'Télécharger une image',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File( [
                        'maxSize' => '1024k'
                    ])
                ]
                
            ])
            ->add('descriptiondegat', TextareaType::class)
            ->add('observations', TextareaType::class)
            ->add('numcontrat_e', NumberType::class)
            ->add('id_expert',HiddenType::class, [
                            'data' =>$options['id_expert'],
            ])   
             ->add('id_vehicule',HiddenType::class, [
                            'data' =>$options['id_vehicule'],
            ])   
        ;
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Constat::class,
            "id_expert" => null ,
            "id_vehicule" => null ,
        ]);
    }
}
