<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class HelloController
{
    #[Route('/hello', name: 'hello_world')]
    public function hello(): JsonResponse
    {
        return new JsonResponse([
            'hello' => 'world'
        ]);
    }
}