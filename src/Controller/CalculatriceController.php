<?php


namespace App\Controller;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Origin, Content-Type, Accept");

use App\Service\Operation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalculatriceController extends AbstractController
{
    /**
     * @Route("/calculatrice", name="calculatrice")
     */
    public function index(): Response
    {
        $greeting="Hello";
        $name="Redspher";
        $title3="Calculator";
        $rMaj="R";
        $e="e";
        $d="d";
        $s="s";
        $p="p";
        $h="h";
        $r="r";

        //$message = $messageGenerator->getHappyMessage();
        //$res=$operation->somme(9,76);
        

        return $this->render('calculatrice/index.html.twig', [
            'greeting'=>$greeting,
            'name'=>$name,
            'title3'=>$title3,

            'rMaj'=>$rMaj,
            'e'=>$e,
            'd'=>$d,
            's'=>$s,
            'p'=>$p,
            'h'=>$h,
            'r'=>$r,

        ]);
    }

    /**
     * @Route("/calculatrice/traitement", name="traitement")
     */
    public function traitement(Operation $operation,Request $request): Response
    {
        $data=$operation->getRes($request->request->get('input'));
        return new Response($data);
    }

    /**
     * @Route("/calculatrice/traitement-api", name="traitementApi")
     */
    public function traitementApi(Operation $operation,Request $request): Response
    {
        
        //return $this->json(["value"=>123]);
        $jsonRecu=$request->getContent();
        $decodeText=html_entity_decode($jsonRecu);
        $res=$operation->getRes(json_decode($decodeText,true)["value"]);
        return $this->json(["value"=>$res],201,[]);
    }
}
