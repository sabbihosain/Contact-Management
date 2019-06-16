
<?php
//
//include_once 'contactlist.php';
?>
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
                <div class="col-sm-12 header text-center align-middle"><h1>Contact Management</h1></div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-sm-8 col-md-offset-2 " style=" height:477px; background-color: greenyellow; margin-top: 0px; margin-bottom: 0px; ">

                        <form action="contactlist.php" method="POST">
                            <div class="col-lg-offset-3" >
                                ID
                                <input type="text" name="id" placeholder="ID" style="padding: 5px 50px 5px 5px;">
                            </div>
                            <div class="col-lg-offset-3" >
                                FirstName
                                <input type="text" name="firstname" placeholder="FirstName" style="padding: 5px 50px 5px 5px;">
                            </div>
                            <div class="col-lg-offset-3" >
                                LastName
                                <input type="text" name="lastname" placeholder="LastName" style="padding: 5px 50px 5px 5px;">
                            </div>
                            <div class="col-lg-offset-3" >
                                Email
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-offset-3" >
                                Password
                                <input type="text" name="password" placeholder="Password" style="padding: 5px 50px 5px 5px;">
                            </div>                                
                            <button type="submit" name="submit" value="submit" class="col-lg-offset-3">SignUp</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 footer text-right" style="margin-bottom: -10px;">footer@copy</div>
            </div>

        </div>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
    </body>
</html>
