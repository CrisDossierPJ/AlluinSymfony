<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 22/02/2018
 * Time: 08:31
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class PremierController extends Controller
{
    /**
     * @Route("premier/number")
     */
    public function numberAction(){
        $number = mt_rand(0,100);

        return $this->render('premier/number.html.twig', array('number'=>$number,));
    }
}