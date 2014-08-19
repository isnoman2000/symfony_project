<?php

namespace Staff\Bundle\TraningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StaffTraningBundle:Default:index.html.twig', array('name' => $name));
    }
}
