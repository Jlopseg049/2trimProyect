<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CanalController extends AbstractController
{
    #[Route('/canal/precio/{author}', name: 'precioCanal_show')]
    public function show(string $author, CanalRepository $productRepository): Response
    {
        $Canal = $doctrine->getRepository(Canal::class)->find($id);

        $Canal = $repository->findOneBy(['Author' => $author]);

        return new Response($Canal->getPrecio());
    }
}
