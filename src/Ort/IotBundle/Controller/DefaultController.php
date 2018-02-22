<?php

namespace Ort\IotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {//composer dump-autoload
        $data = array(
            'title' => 'Index',
            'h1' => 'Hello, World !',
            'body' => 'Lorem ipsum [...]');

        return $this->render('@OrtIot/Default/index.html.twig', $data);
    }
}
