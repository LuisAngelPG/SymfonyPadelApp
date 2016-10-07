<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use AppBundle\Form\AuthUserType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SpectatorType extends AbstractType {

public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('player', EntityType::class , array (
            'class' => 'AppBundle:UserProfilePlayerprofile',
            'choice_label' => 'name',
            'required' => false,
            'choices' => $options["friends"]
            ))
        ;
}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TournamentSpectatorparticipant',
            'friends' => null,
        ));
    }
}