<?php

namespace App\Controller;

use App\Service\CallApi;
use Grpc\Call;
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

        $fakeDate = date_create('07-08-2022');

//        Filter by date
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chosenDate = date('d-m-Y', strtotime($_POST['chosen-date']));
        }

        return $this->render('home/index.html.twig', [
            'datas' => $datas['records'],
            'fakeDate' => $fakeDate,
        ]);
    }
}

