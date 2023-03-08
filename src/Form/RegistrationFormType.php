<?php

namespace App\Form;

use App\Entity\User;
<<<<<<< HEAD
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
=======
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
        ->add('email',EmailType::class,
        ['attr'=>['class'=>'form-control']])
=======
            ->add('email')
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
<<<<<<< HEAD
                        'message' => 'Vous devez accepter les termes ',
                    ]),
                ],
                'label'=>'j\'accepte tous les regles de ce site  '
            ])
            ->add('plainPassword', PasswordType::class, 
            [
=======
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
<<<<<<< HEAD
                
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer votre mot de passe s\'il vous plait  ',
                    ]),
                    new Length([
                        'min' => 8,
=======
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
<<<<<<< HEAD
                'label'=>'Mot de Passe '
=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
            ])
            ->add('nom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('prenom',TextType::class,
            ['attr'=>['class'=>'form-control']])
<<<<<<< HEAD
            ->add('adresse',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('cin',TextareaType::class,['attr'=>['class'=>'form-control']])
            ->add('num_tel',TextareaType::class,['attr'=>['class'=>'form-control']
            ])
            ->add('recaptch3', Recaptcha3Type::class)        ;
=======
            ->add('num_tel',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('cin',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('adresse',TextType::class,
            ['attr'=>['class'=>'form-control']])
        ;
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
