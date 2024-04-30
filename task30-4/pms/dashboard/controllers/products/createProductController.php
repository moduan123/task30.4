<?php

require_once __DIR__ . '/../../../common/functions.php';
require_once __DIR__ . '/../../../common/dbFunctions.php';


createProduct(
    name: $_POST['name'],
    description: $_POST['description'],
    price: $_POST['price'],
    category_id: $_POST['category_id']
);

setSession('success', 'Product created successfully');

redirect('dashboard/products/create.php');
