<?php

include "Controller/ProductController.php";

use Controller\ProductCOntroller;

$productController = new ProductCOntroller;

echo $productController->getAllProduct();
