<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                ])
            ->add('id_expert')
            ->add('id_mecanicien', IntegerType::class)
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
