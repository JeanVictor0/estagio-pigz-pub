<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/api')]
final class ClientController extends AbstractController{
    private UserRepository $entityManager;

    public function __construct(UserRepository $entityManager)
    {
     $this -> entityManager = $entityManager;   
    }


    #[Route('/clients', methods: ['GET'])]
    public function getClient(){
        $service = new UserService(); 
        $arr = $service -> getClients($this->entityManager);
        return $this -> json($arr,$status = 200);
    }


}
?>