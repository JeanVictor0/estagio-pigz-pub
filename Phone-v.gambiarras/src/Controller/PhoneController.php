<?php
namespace App\Controller;

use App\Entity\Phone;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/phone')]
final class PhoneController extends AbstractController{
    private ManagerRegistry $entityManager;

    public function __construct(ManagerRegistry $entityManager)
    {
     $this -> entityManager = $entityManager;   
    }
    #[Route('/{id}', methods: ['POST'])]
    public function addUserNumber($id,Request $request)
    {   
        
        $request = json_decode($request->getContent(), true);
        $phone = new Phone();
        $phone -> setNumber($request['number']);
        $manager = $this->entityManager->getManager();
        $client = $manager->getRepository(User::class)->find($id);
        $manager->persist($phone);
        $client -> addPhone($phone);
        $manager->flush();

        return new Response($status=201);
    }
}
?>