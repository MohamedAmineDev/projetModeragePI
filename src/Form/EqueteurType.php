<?php

namespace App\Form;

use App\Entity\Enqueteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class EqueteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('cin')
            ->add('dateNaissance')
            ->add('genre',ChoiceType::class,array(
                'choices'=>array('Male'=>true,'Femelle'=>false),
                'expanded'=>true,
                'multiple'=>false
            ))
            ->add('tel')
            ->add('motDePasse')
            ->add('matriculeFiscale')
            ->add('registreDesCommeerces',FileType::class,array('data_class' => null))
            ->add('adresseSociete')
            ->add('logo',FileType::class, array('data_class' => null))
            ->add('submit',SubmitType::class,['label'=>"s'inscrire",])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Enqueteur::class,
        ]);
    }
}
