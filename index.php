<?php
 require 'connections/api.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website API Football</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #EAEAEA;
        }
        
        .title {
            font-size: 40px;
            font-weight: bold;
            margin-top: 8px;
            margin-bottom: 12px;
            color: white;
        }

        nav {
            background-color: #2FA18E;
            margin-bottom: 26px;
        }

        li {
            margin-left: 8px;
            margin-right: 8px;
        }

        .table {
            padding: 16px;
        }

        .bg-btn-active {
            background-color: #09E1B7;
            padding: 8px;
        }

        .bg-btn-inactive {
            background-color: #00BB96;
            padding: 8px;
        }

    </style>
</head>
<body>

    <?php include 'pages/Navbar.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>