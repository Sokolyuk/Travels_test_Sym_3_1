<?php

namespace Travels\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TravelsMainBundle::index.html.twig');
    }

	/**
     * @Route("/departure")
     */
    public function departureAction()
    {
        return $this->render('TravelsMainBundle:departure:index.html.twig');
    }
}
