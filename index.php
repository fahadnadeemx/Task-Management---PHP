<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='../assets/css/dashboard.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Red Hat Display', sans-serif;
    }

    h1 {
        color: #1B6AC7;
        font-weight: 600;
    }

    p {
        font-size: 16px;
    }

    .main {
        background: #1B6AC7;
        width: 100%;
        padding: 10px;
        height: 350px;
        margin: 0 auto;
    }

    .shedow {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    }


    .btn {
        border: 2px solid #1B6AC7;
        background: none;
        margin: 10px;
        width: 150px
    }

    .admin {
        background: #1B6AC7;
        color: white;
    }

    @media screen and (min-width: 720px) {
        .reverse {
            flex-flow: wrap-reverse !important;
        }

    }
</style>

<body>
    <div class="main">
        <center>
            <img src="./assets/images/logo-1.png" alt="" width="200px">
        </center>
        <br />
        <br />
        <div class="container">
            <div class="row shedow">
                <div class="col">
                    <div class="row reverse">
                        <div class="col-md-12 col-lg-6 align-self-center">
                            <h1>Task Management System</h1>
                            <br />
                            <p>
                                There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable.
                                If you are going to use a passage of Lorem Ipsum,
                            </p>
                            <br />
                            <a href="./auth/"><Button class="btn admin"> Admin Login </Button></a>
                            <a href="./auth/"><Button class="btn"> User Login </Button></a>

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <img class="landing-img" src=".//assets/images/landing-image.png" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>