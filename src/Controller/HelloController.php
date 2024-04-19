<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserProfile;
use App\Repository\UserProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    private array $messages = [
        ['message' => 'Hello', 'created' => '2022/06/12'],
        ['message' => 'Hi', 'created' => '2022/04/12'],
        ['message' => 'Bye!', 'created' => '2021/05/12']
      ];

    #[Route('/', name: 'app_index')]
    public function index(UserProfileRepository $userProfileRepository): Response
    {
        $user = new User();
        // $user->setEmail('info5@zoleikha.com');
        // $user->setPassword('12345678');

        // $userProfile = new UserProfile();
        // $userProfile->setUser($user);

        // $userProfileRepository->add($userProfile, false);

        return $this->render('hello/index.html.twig', [
            'messages' => $this->messages,
            'limit' => 3
        ]);
    }
}
