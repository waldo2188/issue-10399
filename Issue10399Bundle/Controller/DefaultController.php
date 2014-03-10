<?php

namespace Waldo\Issue10399Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Waldo\Issue10399Bundle\Form\Type\AFormType;

class DefaultController extends Controller
{
    /**
     * @Route("/form-must-die/")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        
        $form = $this->createForm(new AFormType());
        
        $form->handleRequest($request);

        if ($request->isMethod("POST") && $form->isValid()) {

            
        }

        
        return array(
            "form" => $form->createView()
        );
    }
}
