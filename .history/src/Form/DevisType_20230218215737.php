<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('items', CollectionType::class, [
            'entry_type' => DevisItemType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            'prototype' => true,
            'prototype_name' => '__item__',
            'attr' => [
                'class' => 'items-collection',
            ],
        ])
        
        ->addEventListener(FormEvents::POST_SUBMIT, [$this, 'calculateTotalPrice']);
      
       

       
    }
    public function calculateTotalPrice(FormEvent $event)
    {
        $devis = $event->getData();
        $totalHt = 0;
        foreach ($devis->getItems() as $item) {
            $totalPrice = $item->getQuantite() * $item->getUnitPrice();
            $item->setTotalPrice($totalPrice);
            
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
