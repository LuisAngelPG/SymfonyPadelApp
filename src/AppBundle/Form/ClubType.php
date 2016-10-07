<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ClubType extends AbstractType {

public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('image', FileType::class, array('data_class' => null, 'required' => false))
        ->add('oldPathImage', HiddenType::class, array("mapped"=>false))
        ->add('name')
        ->add('phoneNumber')
        ->add('email')
        ->add('location')
        ->add('horario')

        ->add('route', HiddenType::class, array("mapped"=>false))
        ->add('street_number', HiddenType::class, array("mapped"=>false))
        ->add('locality', HiddenType::class, array("mapped"=>false))
        ->add('administrative_area_level_4', HiddenType::class, array("mapped"=>false))
        ->add('postal_code', HiddenType::class, array("mapped"=>false))
        ->add('administrative_area_level_2', HiddenType::class, array("mapped"=>false))
        ->add('country', HiddenType::class, array("mapped"=>false))
        ->add('latitude', HiddenType::class, array("mapped"=>false))
        ->add('longitude', HiddenType::class, array("mapped"=>false))

        ->add('amountCourt')
        ->add('equipmentRental')
        ->add('foodServices')
        ->add('disabledAccess')
        ->add('showers')
        ->add('gym')
        ->add('sauna')
        ->add('kindergarten')
        ->add('jacuzzi')
        ->add('parking')
        ->add('parkingMotorcycles')
        ->add('parkingBicycles')
        ->add('waterpool')
        ->add('locker')
        ->add('shop')
        ->add('wifi')
        ->add('playground')
        ->add('school')
        ->add('americanTournament')
        ->add('leagues')
        ->add('ilumination')
        ->add('crystalCourts')
        ->add('wallCourts')
        ->add('coverCourts')
        ->add('centralCourts')
        ->add('individualCourts')

        ->add('url')
        ->add('facebookUrl')
        ->add('twitterUrl')
        ->add('skypeUsername')
        ->add('instantgramUrl')

        ->add('isOwner', CheckboxType::class, array("mapped"=>false, "label"=>false, "required"=>false))
        ->add('nombreContacto')
        ->add('emailContacto')
        ->add('phoneNumberMovi')
    ;   
}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TournamentClub',
        ));
    }
}
