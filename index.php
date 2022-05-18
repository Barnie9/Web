<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="index.css">
    
        <script src="https://kit.fontawesome.com/22058b111d.js" crossorigin="anonymous"></script>
    
        <title>FlowerParty</title>
    </head>

    <body>
        <?php
        require('db.php');
        session_start();
        ?>
        <div class="menu">
            <img class="logo" src="img/logo.png">
            <a href="#" class="title">FLOWER LAB</a>
            <nav>
                <a href="#" class="button">HOME</a>
                <a href="#" class="button">SHOP</a>
                <a href="#" class="button">CONTACT US</a>
                <a href="#" class="button">CART</a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "<a href='logout.php' class='button'>LOG OUT</a>";
                }
                else
                {
                    echo "<a href='login.php' class='button'>LOG IN</a>";
                    echo "<a href='signup.php' class='button'>SIGN UP</a>";
                }
                ?>
            </nav>
        </div>
        <p>ceva</p>
    </body>
</html>