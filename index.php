<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php 
    if(@$_GET['page']=="home"){
        ?>
    <link rel="stylesheet" href="./styleDark.css">

    <?php 
  }
        ?>
    <title>Document</title>
</head>

<body>


    <nav>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=login">Login</a>
        <a href="index.php?page=logs">Logs</a>
    </nav>


    <section>

        <?php 
    if(@$_GET['page']=="home"){
        ?>
        <h1>HomePage</h1>
        <?php 
    }else if(@$_GET['page']=="login"){
        ?>
        <h1>Login</h1>
        <?php 
    }else if(@$_GET['page']=="logs"){
        ?>
        <h1>Log list</h1>
        <?php 
    }else{
        ?>

        <?php 
    }
    
    ?>

    </section>

    <footer>
        <h2>primjer | pseudo singlePageApp &copy; A.T.</h2>
    </footer>
</body>

</html>