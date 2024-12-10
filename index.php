<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Sports World</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=volleyball">Volleyball</a></li>
                <li><a href="index.php?page=football">Football</a></li>
                <li><a href="index.php?page=basketball">Basketball</a></li>
            </ul>
        </nav>
    </header>
    <section >
        <h2>HOME PAGE</h2>
    <?php 

        if (isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page) {
                case 'volleyball';
                include 'volleyball.php';
                break;
                case 'football';
                include 'football.php';
                break;
                case 'basketball';
                include 'basketball.php';
                break;

            }
        }

    ?>
  
        
    </section>
    

    
    <footer>
        <p>&copy; 2024 Sports World. All Rights Reserved.</p>
    </footer>

    
</body>
</html>
