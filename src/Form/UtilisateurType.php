<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            
            ->add('email',EmailType::class)
            ->add('motDePasse',PasswordType::class)
            ->add('cin')
            ->add('tel',TelType::class)
            ->add('dateNaissance',DateType::class,[
                'widget' => 'single_text',
    'format' => 'yyyy-MM-dd'
            ])
            ->add('genre',ChoiceType::class,array(
                'choices'=>array('Male'=>true,'Femelle'=>false)
            ))
            
            ->add('save_enqueteur', SubmitType::class,[
                'label'=>'en tant que enqueteur'
            ])
            ->add('save_sonde', SubmitType::class,[
                'label'=>'en tant que sonde'
            ])
            ->add('photo',FileType::class, array('data_class' => null))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
    /*
    public count($i,$f){
        $a=[];
        while($i<$f){

        }
    }*/
}
