<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant')
            ->add('description')
            ->add('etat',ChoiceType::class, [
                'choices' => [
                    'réparer' => 'réparer',
                    'non réparer' => 'non réparer',
                ],
                'expanded' => true, // display as radio buttons
                'multiple' => false, // only one choice can be selected
                 
            ])
            ->add('id_expert',IntegerType::class)
            ->add('id_mecanicien')
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
