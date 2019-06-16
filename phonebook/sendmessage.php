<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <?php
            include_once 'header.php';
            ?>  
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
                            <li><a href="contactlist.php">Contact List</a></li>
                            <li><a href="addcontact.php">Add Contact</a></li>
                            <li class="active"><a href="message.php">Message</a></li>                       
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style=" height:425px; background-color: chartreuse; margin-top: -20px; margin-bottom: 0px;padding: 50px 0px 30px 100px;">              
                    <div class="search-container col-lg-offset-2" style="margin-bottom: 20px;">
                        <h1>Message send to Asif</h1>
                        Subject:

                            <input type="text" placeholder="Subject.." name="search" style="margin-top:12px;">
                        

                    </div>
                    <div class="search-container col-lg-offset-2" style="margin-bottom: 40px;">
                        <form>
                            Body:

                            <input type="text" placeholder="Subject.." name="search" style="margin-top:12px; padding: 50px 100px 50px 100px;">
                        </form>

                    </div>

<!--                    <table class="col-lg-offset-2" border=1px solid black;">
       <tr style="background-color: lightblue;">
        <th style="padding: 5px 25px 5px 25px; text-align: center;"><b>Date</b></th>
        <th style="padding: 5px 50px 5px 50px;"><b>Subject</b></th>
        <th style="padding: 10px; text-align: center;"><b>Message</b></th>
    </tr>
    <tr style="background-color: snow;">
        <td style="padding: 50px 25px 50px 25px;"><b></b></td>
        <td style="padding: 50px 50px 50px 50px;"><b></b></td>
        <td style="padding: 50px 150px 50px 150px;"><b></b></td>
        <td style="border-collapse: collapse; background-color:chartreuse;"><button type="button"  class="btn btn-danger" style="padding:10px 10px 10px 10px;">Send Message</button>
        </td>
    </tr>
    
</table>-->
                    <!--                    <div class="row">
                                            <div class="col-lg-offset-2" style="margin-top: 20px;"> <a href="#" class="previous btn-danger" style="padding: 5px;">&laquo; Previous</a>
                                                <a href="#" class="next btn-danger" type="btn" style="padding: 5px;">Next &raquo;</a></div>
                                        </div>-->
                    <div class="row col-lg-offset-2" style="margin-top: -20px;">
                            <button type="button" class="btn-danger">Send</button>
                    </div>
                    <!--                    <div class="row">
                                            <div class="col-lg-offset-2" style="margin-top: 20px;"> <a href="#" class="previous btn-danger" style="padding: 5px;">&laquo; Previous</a>
                                        <a href="#" class="next btn-danger" type="btn" style="padding: 5px;">Next &raquo;</a></div>
                                        </div>-->


                </div>
            </div>
            <?php
              include_once 'footer.php';
            ?> 
        </div>
    </div> 
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
