<?php

namespace Ort\IotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IotController extends Controller
{
    public function viewAction($id)
    {
        return $this->render('@OrtIot/Iot/view.html.twig', array(
            'id' => $id,
            // ...
        ));
    }

    public function indexAction()
    {
        $litsIots = $this->getDoctrine()
            ->getManager()
            ->getRepository("OrtIotBundle:IoT")
            ->findAll();

        return $this->render('@OrtIot/Iot/index.html.twig', array(
            'listIots'=>$litsIots,
        ));
    }

    public function addAction()
    {
        return $this->render('@OrtIot/Iot/add.html.twig', array(// ...
        ));
    }

    public function editAction($id)
    {
        return $this->render('@OrtIot/Iot/edit.html.twig', array(
            'id' => $id,
            // ...
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('@OrtIot/Iot/delete.html.twig', array(
            'id' => $id,
            // ...
        ));
    }
    public function testAction(){
        $listCapteur = $this->getDoctrine()
            ->getManager()
            ->getRepository("OrtIotBundle:Typecapteur")
            ->findAll();
        $data = array(
            'Title'=>'Test',
            'listCapteur'=>$listCapteur);
        return $this->render('@OrtIot/Iot/test.html.twig', $data);
    }

}
