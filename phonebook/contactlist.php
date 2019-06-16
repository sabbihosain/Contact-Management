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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 header text-center align-middle"><h1>Contact Management</h1></div>
            </div>
            <div class="row">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href= "#" class="navbar-brand">Contact Information</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="index.php">Home</a></li>                      
                            <li class="active"><a href="contactlist.php">Contact List</a></li>
                            <li><a href="addcontact.php">Add Contact</a></li> 
                            <li><a href="message.php">Message</a></li>

                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style=" height:425px; background-color: chartreuse; margin-top: -20px; margin-bottom: 0px;padding: 50px 0px 30px 100px;">                               
                    <div class="search-container col-lg-offset-0" style="margin-bottom: 20px;">
                        <!--                        <form>
                                                    <button type="button" class="btn-danger">Name</button>
                                                    <input type="text" placeholder="Search.." name="search" style="margin-top:12px;">
                                                    <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                    
                                                </form>-->
                        <form action="search.php" method="POST">
                            Name: <input type="text" name="searchTerm" placeholder="Name">
                            <button type="submit" value="submitBTN" name="search">submit</button>
                        </form>
                    </div>
                    <form action="POST" method="contactlist.php">
                        <table class="table" border=1px solid black;">
                               <tr style = "background-color: lightblue;">
                                <td style = "padding: 10px; text-align: center;"><b>ID</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>FirstName</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>LastName</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>Email</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>Password</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>Action</b></td>
                                <td style = "padding: 10px; text-align: center;"><b>Message</b></td>
                                <?php
                                require_once("connection.php");
                                $sqlData = "SELECT * FROM users";
                                $result = mysqli_query($connection, $sqlData);
                                if ($result == true) {
                                    while ($showData = mysqli_fetch_array($result)) {
                                        ?>
                                    <tr>
                                        <td><?php echo $showData['id']; ?></td>
                                        <td><?php echo $showData['firstname']; ?></td>
                                        <td><?php echo $showData['lastname']; ?></td>
                                        <td><?php echo $showData['email']; ?></td>
                                        <td><?php echo $showData['password']; ?></td>
                                        <td><button><a href="update.php?id=<?php echo $showData['id']; echo $showData['firstname']; echo $showData['lastname'];  echo $showData['email']; echo $showData['password']; ?>">updata</a></button> | <button> <a href="deletecontact.php?id=<?php echo $showData['id']; ?>">Delete</a></button> </td>
                                        <td><button><a href="sendmessage.php">Send Message</a></button> | <button><a href="viewmessage.php">View Message</a></button></td>
                                    </tr>        
                                    <?php
                                }
                            }
                            ?>
                            </tr>
                      </table>
                   </form>
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
                    <div class="row">
                        <div class="col-lg-offset-0" style="margin-top: 20px;"> 
                            <a href="#" class="previous btn-danger" style="padding: 5px;">&laquo; Previous</a>
                            <a href="#" class="next btn-danger" type="btn" style="padding: 5px;">Next &raquo;</a>
                        </div>
                    </div>
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
