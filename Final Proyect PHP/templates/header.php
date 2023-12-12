
<!--Global Header-->
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- create a dynamic title -->
    <title><?php echo $pageTitle; ?></title>
    <!-- create a dynamic description -->
    <meta name="description" content="<?php echo $pageDesc; ?>">
    <meta name="robots" content="noindex, nofollow">
    <!-- add our custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik:ital@1&display=swap" rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- add our CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  </head>

  <body>
  <header>
    <div>
      <a href="index.php"><img src="./img/logo.png" alt="logo"></a>
    </div>
    <nav>
      <menu>
        <li><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
        <li><a href="index2.php"><i class="bi bi-file-earmark-plus"></i> Content</a></li>
        <li><a href="register.php"><i class="bi bi-pencil-square"></i> Register</a></li>
        <li><a href="View.php"><i class="bi bi-camera"></i> Gallery</a></li>
        <li><a href="display-table.php"><i class="bi bi-gear"></i> User Administrator</a></li>
        <li><a href="signin.php"><i class="bi bi-person-circle"></i> Sign in</a></li>
      </menu>
    </nav>
  </header>
    
