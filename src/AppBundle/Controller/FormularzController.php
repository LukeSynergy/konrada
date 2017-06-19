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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Form\FormularzType;

class FormularzController extends Controller
{
    /**
     * @Route("/show")
     * 
     * @Template
     */
    public function showAction()
    {
        /* 
        użyty template (pamiętaj o includowaniu use...) dlatego nie trzeba:
        return $this->render('AppBundle:Formularz:show.html.twig', array(
            'form' => $form->createView(),
            'im' => $imie,
        ));
         */
        $formularz = new Formularz();
        $form = $this->createForm(\AppBundle\Form\FormularzType::class, $formularz);
        return [
            'form' => $form->createView(),
        ];
    }
}
/* 
class FormularzController extends Controller
{
    /**
     * @Route("/show")
     
    public function showAction()
    {
        $formularzyk = new Formularz();
         
        $imie = $this->get('translator')->trans('formularz.name', [], 'formularz');
        //zmienna w yml, potem tablica parametrow, ale jest pusta bo nie ma zadnej zmiennej przez % jak w togetee
        //ostatni patametr - formularz, czyli nazwa pliku translacji w resources formularz.pl.yml
        
        $form = $this->createFormBuilder($formularzyk)
        ->add('name', TextType::class, array('label' => $imie))
        ->add('surname', TextType::class)
        ->add('email', EmailType::class)
        ->add('text', TextareaType::class)
        ->add('send', SubmitType::class, array('label' => 'Submit'))
        ->getForm();
        return $this->render('AppBundle:Formularz:show.html.twig', array(
            'form' => $form->createView(),
            'im' => $imie,
        ));
    }
}
 */