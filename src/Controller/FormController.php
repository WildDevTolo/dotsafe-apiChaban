<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Form extends AbstractController
{
//    #[Route('/', name: 'app_filter_by_name')]
    public function index(CallApi $callApi): Response
    {
//        Retrieving dataset from API
        $datas = $callApi->getData();

        return $this->render('_component/_form.html.twig', [
            'datas' => $datas['records'],
        ]);
    }
}
