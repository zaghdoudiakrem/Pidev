<?php

namespace App\Form;

use App\Entity\Reponse;
use App\Entity\User;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description')
            ->add('id_reclamation', HiddenType::class, [
                'data' =>$options['id_reclamation'],
            ])   
            ->add('id_assureur', HiddenType::class, [
                'data' =>$options['id_assureur'],
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
            'id_reclamation' => null,
            'id_assureur' => null,
        ]);
    }
}
