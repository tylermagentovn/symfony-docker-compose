<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;

class AuthController extends AbstractController
{
    #[Route('/api/login_check', name: 'app_api_auth')]
    public function getToken(UserInterface $user, JWTTokenManagerInterface $JWTManager): Response
    {
        return new JsonResponse(['token' => $JWTManager->create($user)]);
    }
}
