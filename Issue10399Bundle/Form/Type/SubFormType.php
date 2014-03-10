<?php
namespace Waldo\Issue10399Bundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

/**
 * @author valérian Girard <valerian.girard@educagri.fr>
 */
class SubFormType  extends AbstractType {

    
   public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder->add("thing", "text");

        $builder->addEventListener(FormEvents::PRE_SET_DATA,
                
            function(FormEvent $event){
                die("I Must Die Here Waldo\Issue10399Bundle\Form\Type\SubFormType ");
            });
            
   }
   
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        // If inherit_data is set to true
        $resolver->setDefaults(array(
            'inherit_data' => true
        ));
    }
   
   public function getName()
   {
       return "sub_form";
   }
}
