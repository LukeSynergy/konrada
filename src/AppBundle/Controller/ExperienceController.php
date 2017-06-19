<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExperienceController extends Controller
{
    /**
     * @Route("/display")
     */
    public function displayAction()
    {
        return $this->render('AppBundle:Experience:display.html.twig', array(
            // ...
        ));
    }

}
