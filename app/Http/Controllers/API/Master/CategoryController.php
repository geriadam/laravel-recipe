<?php

namespace App\Http\Controllers\API\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ResponseAPI;
use App\Models\Category;
use App\Models\ResponseMessages;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    use ResponseAPI;

    public function index()
    {
        $categories = Category::all();

        return $this->sendResponse($categories, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }

    public function detail(Category $category)
    {
        return $this->sendResponse($category, ResponseMessages::RESPONSE_API_INDEX, Response::HTTP_OK);
    }
}
