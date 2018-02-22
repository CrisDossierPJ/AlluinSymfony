<?php

namespace Ort\IotBundle\Controller;

use Ort\IotBundle\Entity\Capteur;
use Ort\IotBundle\Entity\IoT;
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
        //Récupération de l'entityManager
        $em = $list = $this->getDoctrine()->getManager();


        //Récupération du type capteur 1
        $typeCapteur= $em->getRepository('OrtIotBundle:Typecapteur')->find(3);

        $iot= $em->getRepository('OrtIotBundle:IoT')->find(5);

        //Instanciation du capteur et initialisation
        $capteur = new Capteur();
        $capteur->setNom('Ma température')->setTypeCapteur($typeCapteur)->setIot($iot);



        //On persiste le capteur
        //et on déclenche l'enregistrement dans la bdd
        $em->persist($capteur);
        $em->flush();

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
    public function testAction(/*$id = NULL*/){

        $repository =  $this->getDoctrine()
            ->getManager()
            ->getRepository("OrtIotBundle:Typecapteur");


        $listCapteur = $repository->findAll();
        /*
        $capteur= $repository->find($id);*/
        $data = array(
            /*'capteur'=>$capteur,*/
            'Title'=>'Test',
            'listCapteur'=>$listCapteur);


        return $this->render('@OrtIot/Iot/test.html.twig', $data);
    }

}
