<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthUserType extends AbstractType {

public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
        ->add('username')
        ->add('email')
    ;
}

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AuthUser',
        ));
    }
}
