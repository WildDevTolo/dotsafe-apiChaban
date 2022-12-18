<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilterByNameController extends AbstractController
{
    #[Route('/filter_by_name', name: 'app_filter_by_name')]
    public function index(CallApi $callApi): Response
    {
//        Retrieving dataset from API
        $datas = $callApi->getData();

        $fakeDate = date_create('07-08-2022');

//        Filter by name
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullBoatName = $_POST['reason'];
            };

        return $this->render('filter_by_name/index.html.twig', [
            'datas' => $datas['records'],
            'fakeDate' => $fakeDate,
            'boatName' => $fullBoatName,
        ]);
    }
}
