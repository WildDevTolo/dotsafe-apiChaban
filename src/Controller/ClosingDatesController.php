<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClosingDatesController extends AbstractController
{
    #[Route('/closing/dates', name: 'app_closing_dates')]
    public function index(CallApi $callApi): Response
    {
//        Retrieving dataset from API
        $datas = $callApi->getData();

//        Setting a chosen date
        $hourRef = date('G:i:s');
        $date = date_create('30-06-2022' . $hourRef);

        return $this->render('closing_dates/index.html.twig', [
            'datas' => $datas['records'],
            'date' => $date->format("d-m-Y G:i:s"),
        ]);
    }
}
