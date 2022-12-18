<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilterByDate extends AbstractController
{
    #[Route('/filter_by_date', name: 'app_closing_dates')]
    public function index(CallApi $callApi): Response
    {
//        Retrieving dataset from API
        $datas = $callApi->getData();

        $fakeDate = date_create('01-08-2022');

//        Filter by date
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $chosenDate = date('d-m-Y', strtotime($_POST['chosen-date']));
        }


        return $this->render('filter_by_date/index.html.twig', [
            'datas' => $datas['records'],
            'chosenDate' => $chosenDate,
            'fakeDate' => $fakeDate,
        ]);
    }
}
