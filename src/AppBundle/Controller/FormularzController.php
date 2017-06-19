<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Formularz;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Translation\Translator;

class FormularzController extends Controller
{
    /**
     * @Route("/show")
     */
    public function showAction()
    {
        $formularzyk = new Formularz();
        
        $imie = $this->get('translator')->trans($name);
        
        $form = $this->createFormBuilder($formularzyk)
        ->add('name', TextType::class, array('label_format' => $imie ))
        ->add('surname', TextType::class)
        ->add('email', EmailType::class)
        ->add('text', TextareaType::class)
        ->add('send', SubmitType::class, array('label' => 'Submit'))
        ->getForm();
        return $this->render('AppBundle:Formularz:show.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
