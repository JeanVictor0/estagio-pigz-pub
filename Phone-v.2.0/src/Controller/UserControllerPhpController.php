<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserControllerPhpController extends AbstractController
{
    #[Route('/api/clients', name: 'app_user_controller_php')]
    public function index(ManagerRegistry $doctrine): JsonResponse
    {
        $repository = new ClientRepository($doctrine);
        $arr = $repository -> findAll();
        foreach ($arr as $i => $client){
            $phones = [];
            $count = 0;
            foreach ($client->getPhone() as $phone){
                $phoneArray = ["id" => $phone->getId(),"number" => $phone -> getNumber()];
                $phones[$count] = $phoneArray;
                $count += 1;
            }
            $arr[$i] = ["id" => $client->getId(),"nome" => $client->getName(),"doc" => $client -> getDoc(),"phones"=> $phones];


        }
        return $this->json(["clients" => $arr]);
    }

    #[Route('/api/client', methods: ['POST'])]
    public function CreateClient (ManagerRegistry $doctrine,Request $request)
    {   
        $request = json_decode($request->getContent(), true);
        $user = new Client();
        if(!$request['nome'] || !$request['doc'] ){
            return New Response('Tem alguma das informações faltando',$status = 400);
        } else if (strlen($request['doc']) > 10){
            return New Response('Documento tem que ter acima de 10 caracteres',$status = 400);
        } else if(intval($request['number']) <= 1){
            return New Response('Documento nao pode ter outros carecteres alem de numeros',$status = 400);
        }
        $user -> setName($request['nome']);
        $user -> setDoc($request['doc']);
        $repository = new ClientRepository($doctrine);
        $repository -> add($user);
        
        return new Response("Ok");
    }


    #[Route('/api/client/{id}', methods: ['GET'])]
        public function getClientById($id,ManagerRegistry $doctrine){
            $repository = new ClientRepository($doctrine);
            $arr = $repository -> find($id);

                $phones = array();
                $count = 0;
                foreach ($arr->getPhone() as $phone){
                    $phoneArray = ["id" => $phone->getId(),"number" => $phone -> getNumber()];
                    $phones[$count] = $phoneArray;
                    $count += 1;
                };
                $arr = ["id" => $arr->getId(),"nome" => $arr->getName(),"doc" => $arr -> getDoc(),"phones"=> $phones];
    
    

            return $this -> json($arr);
        }
}
