<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 18/11/15
 * Time: 18:03
 */

namespace AppBundle\Controller;

use AppBundle\Service\CalculatorServices;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\PsrServerRequestParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CalcController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/sum", name="sum")
     */
    public function sumAction()
    {
        $action='doSum';
        return $this->render(':calculator:formCalc.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doSum", name="doSum")
     */
    public function doSum(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($num1);
        $serv->setCampo2($num2);
        $serv->sum();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/substract/", name="substract")
     */
    public function substract()
    {
        $action='doSubstract';
        return $this->render(':calculator:formCalc.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doSubstract", name="doSubstract")
     */
    public function doSubstract(request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($num1);
        $serv->setCampo2($num2);
        $serv->restar();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/multiply", name="multiply")
     */
    public function multiply()
    {
        $action='doMultiply';
        return $this->render(':calculator:formCalc.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doMultiply", name="doMultiply")
     */
    public function doMultiply(request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($num1);
        $serv->setCampo2($num2);
        $serv->multiplicar();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="division", name="division")
     */
    public function division()
    {
        $action='doDivision';
        return $this->render(':calculator:formCalc.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doDivision", name="doDivision")
     */
    public function doDivision(request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($num1);
        $serv->setCampo2($num2);
        $serv->dividir();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/contarCaracteres", name="contarCaracteres")
     */
    public function contarCAracteres()
    {
        $action='doContarCaracteres';
        return $this->render(':calculator:formCadenas.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doContarCaracteres", name="docontarCaracteres")
     */
    public function doContarCaracteres(Request $request)
    {
        $num1=$request->request->get('txt1');
        $num2=$request->request->get('txt2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($num1);
        $serv->setCampo2($num2);
        $serv->contarCAdenas();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/invertirCadena", name="invertirCadena")
     */
    public function invertirCadena()
    {
        $action='doInvertirCadena';
        return $this->render(':calculator:formCadenas.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doInvertirCadena", name="doInvertirCadena")
     */
    public function doInvertirCadena(Request $request)
    {
        $text1=$request->request->get('txt1');
        $text2=$request->request->get('txt2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($text1);
        $serv->setCampo2($text2);
        $serv->invertirCadena();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/mayuscula", name="mayuscula")
     */
    public function mayuscula()
    {
        $action='doMayuscula';
        return $this->render(':calculator:formCadenas.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doMayuscula", name="doMayuscula")
     */
    public function doMayuscula(Request $request)
    {
        $text1=$request->request->get('txt1');
        $text2=$request->request->get('txt2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($text1);
        $serv->setCampo2($text2);
        $serv->convertirMauscula();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/juntar", name="juntar")
     */
    public function juntar()
    {
        $action='doJuntar';
        return $this->render(':calculator:formCadenas.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doJuntar", name="doJuntar")
     */
    public  function doJuntar(Request $request)
    {
        $text1=$request->request->get('txt1');
        $text2=$request->request->get('txt2');

        $serv=$this->container->get('app.service.calculator_services');

        $serv->setCampo1($text1);
        $serv->setCampo2($text2);
        $serv->juntar();
        $result=$serv->getResult();

        return $this->render(':calculator:resultado.html.twig',['result'=>$result]);
    }


}