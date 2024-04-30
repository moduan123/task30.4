<?php include(__DIR__ . '/../../common/functions.php'); ?>
<?php include(__DIR__ .'/../../common/dbFunctions.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= route('website') ?>">PMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= route('dashboard') ?>">Home</a>
        </li>
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= route('dashboard/categories/create.php') ?>">Add New </a></li>
            <li><a class="dropdown-item" href="<?= route('dashboard/categories/index.php') ?>">View All </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= route('dashboard/products/create.php') ?>">Add New </a></li>
            <li><a class="dropdown-item" href="<?= route('dashboard/products/index.php') ?>">View All </a></li>
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row">

   