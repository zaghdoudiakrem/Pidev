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
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class DevisItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextType::class, [
                'label' => 'Description',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Champs Description est obligatoire'
                    ]   )
                ],
                
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                ],
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantité',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Champs Quantité est obligatoire'
                    ] ),
                    new Positive([
                        'message' => 'Quantité doit etre positive'
                    ] )
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('unitPrice', NumberType::class, [
                'label' => 'Prix Unitaire',
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
