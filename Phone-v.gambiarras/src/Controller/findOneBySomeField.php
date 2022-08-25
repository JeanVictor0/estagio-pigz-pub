<?php
namespace App\Controller;

use App\Repository\UserRepository;
use App\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/api")]
class findOneBySomeField extends AbstractController{
    
    public function __construct(UserRepository $entityManager)
    {
     $this -> entityManager = $entityManager;   
    }

    #[Route('client/{id]', methods: ['GET'])]
    public function getClientByDoc($id,UserRepository $userRepository){
        $service = new UserService();
        $arr = $service -> getClientByDoc($userRepository,$id);
        return $this -> json($arr);
    }
    
}
?>