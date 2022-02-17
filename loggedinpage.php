<?php

session_start();

$diaryContent = "";

if (array_key_exists("id", $_COOKIE) && $_COOKIE['id']) {
    $_SESSION['id'] = $_COOKIE['id'];
}

if (array_key_exists("id", $_SESSION) && $_SESSION['id']) {


    include("connection.php");
    $query = "SELECT diary FROM `users` WHERE id=" . mysqli_real_escape_string($link, $_SESSION['id']) . " LIMIT 1";

    $row = mysqli_fetch_array(mysqli_query($link, $query));

    $diaryContent = $row['diary'];
} else {
    header("Location: index.php");
}



?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<nav class="navbar navbar-light bg-faded navbar-fixed-top">
    <a class="navbar-brand" href="#">Secret Diary</a>

    <div class="pull-xs-right">

        <a href="index.php?logout=1"><button class="btn btn-success-outline" type="submit">Logout</button></a>

    </div>


</nav>




<body>
    <div class="container-fluid">

        <textarea id="diary" class="form-control"><?php echo $diaryContent; ?>

</textarea>



    </div>
</body>

<?php include("footer.php"); ?>


<style>
    html {
        background: url(background-sd.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    body {
        background: none;
        text-align: center;
        align-items: center;
        margin: 0 auto;
    }

    #diary {
        text-align: center;
        width: 60%;
        height: 60%;
        margin-top: 7%;
        border-radius: 5px;


    }


    p {
        color: white;

    }
</style>

</html>