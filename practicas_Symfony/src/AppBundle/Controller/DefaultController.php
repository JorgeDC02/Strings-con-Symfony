<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    //public function indexAction(Request $request)
    //{
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }*/

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/", name="calculator")
     */
    public function indexAction()
    {
        return $this->render('calculator/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/calculator", name="indexCalculator")
     */
    public function indexCalculator()
    {
        return $this->render('calculator/calculator.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/cadenas", name="indexCadenas")
     */
    public function indexCadenas()
    {
        return $this->render('calculator/cadenas.html.twig');
    }
}
