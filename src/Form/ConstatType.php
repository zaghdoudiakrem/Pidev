<?php 
 
namespace App\Form;

use App\Entity\Constat;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ConstatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomclient_e' , TextType::class)
            ->add('prenomclient_e', TextType::class)
            ->add('typevehicule_e', TextType::class)
            ->add('marquevehicule_e', TextType::class)
            ->add('assuranceclient_e', TextType::class)
            ->add('adresseclient_e', TextType::class)
            ->add('emplacementaccid', TextType::class)
            ->add('photoaccid', FileType::class, [
                'label' => 'Télécharger une image',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'accept' => 'image/*',
                ],
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
