<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class DummyPlayerType extends AbstractType {

public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('image', FileType::class, array('data_class' => null, 'required' => false))
        ->add('oldPathImage', HiddenType::class, array("mapped"=>false))
        ->add('name')
        ->add('gender', ChoiceType::class, array (
            'choices' => array ('Male' => "male", "Female" => "female")
            ))
        ->add('level', ChoiceType::class, array (
            'choices' => array (
                '1' => '1',
                '2' => '2',
                '2+' => '2+',
                '3' => '3',
                '3+' => '3+',
                '4' => '4',
                '4+' => '4+'
                )
            ))
		->add('equipment', EntityType::class, array(
	        'class' => 'AppBundle:UserProfileEquipment',
	        'choice_label' => 'brand',
	        'required' => 'false',
	        ))    
		;
}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UserProfilePlayerprofile',
        ));
    }
}