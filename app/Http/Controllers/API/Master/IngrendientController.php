<?php

namespace App\Http\Controllers\API\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ResponseAPI;
use App\Models\Ingrendient;
use App\Models\ResponseMessages;
use Symfony\Component\HttpFoundation\Response;

class IngrendientController extends Controller
{
    use ResponseAPI;

    public function index()
    {
        $ingrendients = Ingrendient::all();

        return $this->sendResponse($ingrendients, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }

    public function detail(Ingrendient $ingrendient)
    {
        return $this->sendResponse($ingrendient, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }
}
