<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">      
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
            <div class="row">
                <div class="col-sm-12" style=" height:425px; background-color: chartreuse; margin-top: -20px; margin-bottom: 0px;padding: 50px 0px 30px 100px;">                               
                    <div class="search-container col-lg-offset-0" style="margin-bottom: 20px;">
                        <form action="contactlist.php" method="POST">

                            <h1>registation here</h1>
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
                            <button type="submit" name="submit" value="submit" class="col-lg-offset-3">registation</button>
                        
                    </form>
                    </div>
                    
                    <?php
                    require_once("connection.php");

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $ID = functionName($_POST['id']);
                        $FIRSTNAME = functionName($_POST['firstname']);
                        $LASTNAME = functionName($_POST['lastname']);
                        $EMAIL = functionName($_POST['email']);
                        $PASSWORD = functionName($_POST['password']);

                        $sql = "INSERT INTO users(id,firstname,lastname,email,password) VALUES('$ID','$FIRSTNAME','$LASTNAME','$EMAIL','$PASSWORD');";
                        mysqli_query($connection, $sql);
                    }
//
                    function functionName($data) {
                        $data = trim($data);
                        $data = stripcslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 footer text-right align">footer@copy</div>
            </div>
        </div>     
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>

