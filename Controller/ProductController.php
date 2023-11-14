<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include"Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductCOntroller extends Controller{
    use ResponseFormatter;

    public function __construct()
    {

        $this->controllerName = "Get All Products";

        $this->controllerMethod = "GET";
    }

    public function getAllProduct(){

        $dummyData =[
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "jus Jambu"
        ];

        $response = [
            "controller_atribute" => $this->getControllerAtribute(),
            "product" => $dummyData
        ];
        return $this->responseFormatter(200, "success", $response);
    }
}