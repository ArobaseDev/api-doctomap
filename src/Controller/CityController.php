<?php

namespace App\Controller;

use App\Repository\DoctorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CityController extends AbstractController
{
    #[Route('/city', name: 'app_city')]
    public function index(DoctorRepository $dr): Response
    {
        return $this->json([
            'cities' => $dr->findAll(),
        ]);
    }
}