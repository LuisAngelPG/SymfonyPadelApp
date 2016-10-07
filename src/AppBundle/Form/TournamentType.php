<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class TournamentType extends AbstractType {

private $choicesScoring = array(
        'Individual Points' => 'individual',
        '16 Points' => '16 points',
        '24 Points' => '24 points',
        '32 Points' => '36 points',
        '2 Games/Sets' => '2 sets' ,
        '3 Games/Sets' => '3 sets',
        '4 Games/Sets' => '4 sets',
        '5 Games/Sets' => '5 sets',
        '6 Games/Sets' => '6 sets',
    );

private $choicesType = array(
        'Individual' => 'individual',
        'Partners' => 'partners',
        'Mixed' => 'mixed',
    );

private $choicesPlayers = array(
        '4 Players' => '4',
        '5 Players' => '5',
        '6 Players' => '6',
        '8 Players, 2 Courts' => '8,2',
        '12 Players, 3 Courts' => '12,3',
        '16 Players, 4 Courts' => '16,4',
        "4 Partners, 2 Courts" => "4,2",
        "5 Partners, 2 Courts" => "5,2",
        "6 Partners, 3 Courts" => "6,3",
        "7 Partners, 3 Courts" => "7,3",
        "8 Partners, 4 Courts" => "8,4",
        "9 Partners, 4 Courts" => "9,4",
        "10 Partners, 5 Courts" => "10,5",
        "11 Partners, 5 Courts" => "11,5",
        "12 Partners, 6 Courts" => "12,6",
        "13 Partners, 6 Courts" => "13,6",
        "14 Partners, 7 Courts" => "14,7",

    );

public function buildForm(FormBuilderInterface $builder, array $options) {
    $players = array(
        "Friends" => $options['friends'],
        "Dummys" => $options['dummys']
        );
    $builder
        ->add('name')
        ->add('date')
		->add('club', EntityType::class, array(
        	'class' => 'AppBundle:TournamentClub',
        	'choice_label' => 'name',
            'choices' => $options["favClubs"]
        ))  
        ->add('type', ChoiceType::class, array (
            'choices' => $this->choicesType
        ))                  
        ->add('scoring', ChoiceType::class, array (
            'choices' => $this->choicesScoring
        ))
        ->add('playersCourts', ChoiceType::class, array (
            'choices' => $this->choicesPlayers,
            'mapped' => false
        ))
        ->add('players', CollectionType::class, array(
            'entry_type' => PlayerType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true,
            'mapped' => false,
            'entry_options' => array (
                'friends' => $players,
                )
        ))
        ->add('spectators', CollectionType::class, array (
            'entry_type' => SpectatorType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true,
            'mapped' => false,
            'entry_options' => array(
                'friends' => $options['friends']
                )
            ))
        ;   
}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TournamentTournament',
            'favClubs' => null,
            'friends' => null,
            'dummys' => null,
            'test' => null,
        ));
    }

}
