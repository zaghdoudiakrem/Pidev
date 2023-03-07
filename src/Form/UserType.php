<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,
            ['attr'=>['class'=>'form-control']])
           
            ->add('password',PasswordType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('nom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('prenom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('adresse',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('cin',TextareaType::class,['attr'=>['class'=>'form-control'],'label'=>'CIN'])
            ->add('num_tel',TextareaType::class,['attr'=>['class'=>'form-control'],'label'=>'Numéro de Téléphone'])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Expert' => 'ROLE_EXPERT',
                    'Assureur'=>'ROLE_ASSUREUR',
                    'Mécanicien'=>'ROLE_MECANICIEN',
                    'Administrateur' => 'ROLE_ADMIN'
                ],
                'expanded' => true,
                'multiple' => true,
                'label' => 'Rôles' 
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
