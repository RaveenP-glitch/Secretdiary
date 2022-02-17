<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            text-align: center;
            width: 40%;
            margin-top: 16%;

        }

        html {
            background: url(background-sd.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;


        }

        #LoginForm {
            display: none;
            color: white;
        }



        body {
            background: none;

        }

        .toggleForms:hover {
            cursor: pointer;

        }

        #diary{
            width: 50%;
            height: 50%;
        }

    </style>



    <title>Secret Diary!</title>
</head>

<body>


    <div class="container">
        <h1 style="color: white;">Secret Diary</h1>
        <br />


        <div id="error"><?php echo $error; ?></div>


        <form method="post" id="signUpForm">
            <p style="color: white;"><strong>Store your thoughts permanently and securely!</strong></p>
            <br />
            <p style="color: white;">Interested? Sign Up now.</p>
            <fieldset class="form-group">


                <input class="form-control mb-3" type="email" name="email" placeholder="Your Email">
            </fieldset>

            <fieldset class="form-group">

                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
            </fieldset>



            <div class="checkbox">
                <label style="color: white;">
                    <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in

                </label>

            </div>

            <input type="hidden" name="signUp" value="1">

            <fieldset class="form-group">


                <input class="btn btn-success mt-3" type="submit" name="submit" value="Sign Up!">

            </fieldset>
            <br />
            <h4 class="toggleForms" style="color: lightblue;">Log in</h4>

        </form>




        <form method="post" id="LoginForm">
            <p style="color: white;"><strong>Welcome back!</strong></p>
            <br />
            <p style="color: white;">Login using your Username and Password.</p>

            <fieldset class="form-group">

                <input class="form-control mb-3" type="email" name="email" placeholder="Your Email">
            </fieldset>
            <fieldset class="form-group">

                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
            </fieldset>


            <div class="checkbox">
                <label style="color: white;">
                    <input type="checkbox" name="stayLoggedIn" value=1> Stay logged in

                </label>

            </div>

            <input type="hidden" name="signUp" value="0">

            <fieldset class="form-group">

                <input class="btn btn-success mt-3" type="submit" name="submit" value="Log In!">

            </fieldset>

            <br />
            <h4 class="toggleForms" style="color: lightblue;">Sign up</h4>

        </form>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(".toggleForms").click(function() {
            $("#signUpForm").toggle();
            $("#LoginForm").toggle();

        });
    </script>



</body>



</html>