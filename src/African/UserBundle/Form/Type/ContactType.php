<?php

namespace African\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('required' => true, 'label' => false))
            ->add('email', TextType::class, array('required' => true, 'label' => false))
            ->add('subject', TextType::class, array('required' => true, 'label' => false))
            ->add('message', TextareaType::class, array('required' => true, 'label' => false));
            
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'African\UserBundle\Entity\Contact',
            
        ));
        
    }
    
    
    public function getName()
    {
        return 'contact';
    }
}
