<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Phone;
use App\Repository\ClientRepository;
use App\Repository\PhoneRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhoneControllerPhpController extends AbstractController
{
    #[Route('/api/phone/{id}', name: 'app_phone_controller_php')]
    public function index(ManagerRegistry $doctrine,Request $request, $id)
    {
        $request = json_decode($request->getContent(), true);
        $phone = new Phone();
        $phone -> setNumber($request['number']);
        $phoneRepository = new PhoneRepository($doctrine);

        $phoneRepository -> add($phone);

        $userRepository = new ClientRepository($doctrine);

        $client = $userRepository -> find($id);

        $client -> addPhone($phone);

        $userRepository -> add($client);

        return new Response('Ok');
        

        
    }

}
