<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CallApi $callApi): Response
    {

//        Retrieving dataset from API
        $datas = $callApi->getData();

//        Setting a chosen date
        $date = date_create('30-09-2022');

        return $this->render('home/index.html.twig', [
            'datas' => $datas['records'],
            'date' => $date->format("d-m-Y"),
        ]);
    }
}
