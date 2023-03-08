<?php

namespace App\Form;

use App\Entity\User;
<<<<<<< HEAD

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
=======
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('email',EmailType::class,
            ['attr'=>['class'=>'form-control']])
           
            ->add('password',PasswordType::class,
            ['attr'=>['class'=>'form-control']])
=======
            ->add('email',EmailType::class)
            
            ->add('password',PasswordType::class)
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
            ->add('nom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('prenom',TextType::class,
            ['attr'=>['class'=>'form-control']])
<<<<<<< HEAD
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
=======
            ->add('num_tel',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('cin',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('adresse',TextType::class,
            ['attr'=>['class'=>'form-control']])
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
