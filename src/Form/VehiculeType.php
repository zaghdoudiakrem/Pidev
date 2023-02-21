<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
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
            ->add('id_client' ,HiddenType::class, [
                              'data' =>$options['id_client'],
           ])   
            ->add('id_contrat',HiddenType::class, [
                              'data' =>$options['id_contrat'],
           ])       ;
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
