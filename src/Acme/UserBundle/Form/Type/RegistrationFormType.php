<?php

namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('roles', 'choice', array(
                'choices'   => array(
                    1    => 'ROLE_ADMIN',
                    2 => 'ROLE_USER',
                ),
                'property_path' => false,
                'multiple'  => true,
            ));
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
}