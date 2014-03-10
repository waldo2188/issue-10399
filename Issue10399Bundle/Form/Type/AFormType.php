<?php
namespace Waldo\Issue10399Bundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Waldo\Issue10399Bundle\Form\Type\SubFormType;


/**
 * @author valérian Girard <valerian.girard@educagri.fr>
 */
class AFormType extends AbstractType {

    
   public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder
               ->add('aSubFormType', new SubFormType());
       
       $builder->addEventListener(FormEvents::POST_SUBMIT,
                
            function(FormEvent $event){
//                echo "<pre>:";
//                var_dump("POST_SUBMIT : AFormType");
//                echo "</pre>";
            });
       
   }
   
   
   public function getName()
   {
       return "a_form";
   }
}
