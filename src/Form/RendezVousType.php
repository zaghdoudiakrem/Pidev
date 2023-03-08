<?php

namespace App\Form;

use App\Entity\RendezVous;
use Doctrine\ORM\EntityRepository;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RendezVousType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('lieu')
            ->add('id_expert')
            ->add('id_mecanicien')
            ->add('type')
        //    ->add('id_expert', ChoiceType::class, [
        //         'choices' => $this->getExperts(),
        //         'choice_label' => function ($user) {
        //             return $user->getNom();
        //          },
        //         'choice_value' => function ($user) {
        //             return $user->getId();
        //          },
        //         'multiple' => false,
        //         'expanded' => false
        //     ])
            // ->add('id_mecanicien', ChoiceType::class, [
            //     'choices' => $this->getMecaniciens(),
            //     'choice_label' => function ($user) {
            //         return $user->getNom();
            //     },
            //     //'choice_value' => 'id',
            //     'multiple' => false,
            //     'expanded' => false
            // ])
            // ->add('id_client', ChoiceType::class, [
            //     'choices' => $this->getClients(),
            //     'choice_label' => function ($user) {
            //         return $user->getNom();
            //     },
               
            //     'multiple' => false,
            //     'expanded' => false
            // ])
            
            ->add('ajouter', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }

     private function getExperts() {
         $repository = $this->entityManager->getRepository(User::class);
        $experts = $repository->findByRole('expert');
    
        $choices = array();
    
        foreach ($experts as $expert) {
             $choices[$expert->getNom()] = $expert;
             
        }
    
        return $choices;
     }
    
    // private function getMecaniciens() {
    //     $repository = $this->entityManager->getRepository(User::class);
    //     $mecaniciens = $repository->findByRole('mecanicien');
    
    //     $choices = array();
    
    //     foreach ($mecaniciens as $mecanicien) {
    //         $choices[$mecanicien->getNom()] = $mecanicien;
    //     }
    
    //     return $choices;
    // }
    
    // private function getClients() {
    //     $repository = $this->entityManager->getRepository(User::class);
    //     $clients = $repository->findByRole('client');
    
    //     $choices = array();
    
    //     foreach ($clients as $client) {
    //         $choices[$client->getNom()] = $client;
    //     }
    
    //     return $choices;
    // }
    
}
