<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Canal;

class CanalController extends AbstractController
{
    #[Route('/canal/precio/{author}', name: 'precioCanal_show')]
        public function findPrecioByAuthor(string $author, ManagerRegistry $doctrine): Response
        {
            $Canal = $doctrine->getRepository(Canal::class)->findPrecioByAuthor($author);
            
            return new Response($Canal[0]["precio"]);
        }
        
    #[Route('/canal/find', name: 'CanalAll_show')]
        public function findCanalByAll( ManagerRegistry $doctrine): Response
        {
                $Canal = $doctrine->getRepository(Canal::class)->findCanalByAll();
        
            return new Response(json_encode($Canal));
        }

    #[Route('/canal/find/{author}', name: 'CanalAuthor_show')]
        public function findCanalByAuthor(string $author, ManagerRegistry $doctrine): Response
        {
            if ($author == "") {
                $Canal = $doctrine->getRepository(Canal::class)->findCanalByAll();
            }else{
                $Canal = $doctrine->getRepository(Canal::class)->findCanalByAuthor($author);
            }
            return new Response(json_encode($Canal));
        }
    }       
