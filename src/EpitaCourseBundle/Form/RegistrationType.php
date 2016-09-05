<?php

namespace EpitaCourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('salutation', ChoiceType::class, array(
                    'choices' => array(
                        'Madam' => 1,
                        'Mr' => 2,
                    ),
                    'choices_as_values' => true,
                ))
                ->add('firstname')
                ->add('lastname');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}