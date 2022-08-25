<?php
namespace App\Services;

use App\Entity\User;
use App\Repository\UserRepository as RepositoryUserRepository;
use App\Repository\UserRepository\UserRepository;

class UserService {
    public function getClients(RepositoryUserRepository $UserRepository){
        
        return $UserRepository->findAll();
    } 

    public function getClientByDoc(RepositoryUserRepository $UserRepository, $id){
        return $UserRepository->findOneBySomeField($id);
    }

    public function saveClient(RepositoryUserRepository $UserRepository,User $userEntity){
        return $UserRepository->save($userEntity);
    }

    public function updateClient(RepositoryUserRepository $UserRepository,User $userEntity){
        return $UserRepository->update($userEntity);
    }
}

?>