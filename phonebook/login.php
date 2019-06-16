<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 content_header text-center align-middle">
                    <h1>Contact Management</h1>
                </div>
            </div> 
            <div class="row">      
                <div class="col-sm-12 content_body  text-center content_padding">
                    <form action="login.php" method="POST">
                        <div class="" >
                            <h1>Login Here</h1>
                        </div>
                        <div class="" >
                            Email
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="" >
                            Password
                            <input type="text" name="password" placeholder="Password" >
                        </div>  
                        <div class="" >
                            <button type="submit" name="submit"  class="col-offset-3">login</button>
                        </div>
                    </form>
                    <?php
                    require_once("connection.php");
                    if (isset($_REQUEST["password"])) {
                        $getPassword = $_REQUEST["password"];
                        $sql = "SELECT * FROM users WHERE password='$getPassword'";
                        $result = mysqli_query($connection, $sql);
                        while ($getData = mysqli_fetch_array($result)) {
                            //  echo      $getId = $_REQUEST["id"];
                            ?>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $usergmail = $_POST['email'];
                                $userpassword = $_POST['password'];
                            }
                            if ($userpassword == $getPassword) {
                                header("location: contactlist.php");
                            } else {
                                header("location: login.php");
                                //index.php ty giye abar welcome.php choly zay>>>problem
                                // echo "incorrect password";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 content_footer text-right align">footer@copy</div>
            </div>
        </div>

        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
    </body>
</html>
<