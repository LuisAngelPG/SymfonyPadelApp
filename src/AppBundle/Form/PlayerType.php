<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use AppBundle\Form\AuthUserType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PlayerType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
	    $builder
	        ->add('player', EntityType::class , array (
	    		'class' => 'AppBundle:Player',
	    		'choice_label' => 'name',
	    		'required' => false,
	    		'choices' => $options["friends"]
	        	))
	        ;
	}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'friends' => null,
        ));
    }
}