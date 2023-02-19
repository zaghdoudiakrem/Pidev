<?php
// src/Form/DevisItemType.php
namespace App\Form;

use App\Entity\DevisItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextType::class, [
                'label' => 'Description',
                
                
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantite',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('unitPrice', NumberType::class, [
                'label' => 'Unit Price',
                'attr' => [
                    'class' => 'form-control',
                ],
            ]);
         
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DevisItem::class,
          
        ]);
    }
}
