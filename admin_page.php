<?php
class Confirm{
    public function submitForm($e) {
        $e.preventDefault();
         if ($username!== "Olapade Deola" && $password !== 12345) {
            echo("Incorrect details. Sign in not authorized");
        }else {
            $window->location->assign("posts.php");
         }
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>ADMIN LOGIN</title>
</head>
<body>

    <div class="container" style="margin-left: 32%; margin-top: 10%;">
        <div class="row m-3 card-deck mx-auto" ></div>
            <div class="card col-12 col-md-4 p-0 mx-auto mt-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <div class="card-header text-center bg-primary text-light h2"> Admin Login Page</div>
                <form action="" method="POST" class="card-body"  style="margin-top: 70px;" onsubmit="submitForm($e)">
                        <p class="card-text">Username<input type="text" class="form-control" name="username" required></p>
                        <p class="card-text">Password<input type="password" class="form-control" name="password" required></p>
                        <!-- <a class="card-link" > -->
                            <input class="btn btn-primary rounded-pill mt-3" type="submit" value="Login" style="margin-left: 36%;" name="login">
                        <!-- </a> -->
                    <br>
                    <p id="message" style="color: red;"></p>
                </form>
            </div>
    </div>

</body>
</html>