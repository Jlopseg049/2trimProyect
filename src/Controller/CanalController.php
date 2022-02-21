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
    // La primera vez llamaremos a todos los canales y crearemos la 
    // estructura del buscador 
    #[Route('/canal/findAll', name: 'CanalAll_show')]
        public function findCanalByAll( ManagerRegistry $doctrine): Response
        {
                
            $canales = $doctrine->getRepository(Canal::class)->findCanalByAll();

                $response = array( 
                    "code" => 200,
                    "responseHead" => $this->render('canales/canalesCabecera.html.twig')
                    ->getContent(), 
                    "responseBody" => $this->render('canales/canales.html.twig', [
                    'canales' => $canales,
                    ])->getContent());
                    return new Response(json_encode($response));          }
    
    // Una vez ya hayamos creado nuestra estructura, unicamente necesitaremos
    // 
    #[Route('/canal/find/{author}', name: 'CanalAuthor_show')]
        public function findCanalByAuthor(string $author , ManagerRegistry $doctrine): Response
        {   
            if ($author == "all") {
                $canales = $doctrine->getRepository(Canal::class)->findCanalByAll();
            }else{
                $canales = $doctrine->getRepository(Canal::class)->findCanalByAuthor($author);
            }

            $response = array( 
                "code" => 200,
                "response" => $this->render('canales/canales.html.twig', [
                            'canales' => $canales,
                ])->getContent());
                return new Response(json_encode($response));   
        }
    }       
