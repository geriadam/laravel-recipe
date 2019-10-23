<?php

namespace App\Http\Controllers\API\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ResponseAPI;
use App\Models\Recipe;
use App\Models\ResponseMessages;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends Controller
{
    use ResponseAPI;

    public function index()
    {
        $recipes = Recipe::all();

        return $this->sendResponse($recipes, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }

    public function detail(Recipe $recipe)
    {
        return $this->sendResponse($recipe, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }
}
