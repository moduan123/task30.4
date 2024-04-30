<?php

require_once __DIR__ . '/../../../common/functions.php';
require_once __DIR__ . '/../../../common/dbFunctions.php';

$name = $_POST['name'];

createCategory($name);

setSession('success', 'Category created successfully');

redirect('dashboard/categories/create.php');
