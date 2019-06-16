<?php
require_once("connection.php");
if (isset($_REQUEST["id"])) {
    $getId = $_REQUEST["id"];
    $sql = "SELECT * FROM users WHERE id='$getId'";
    $result = mysqli_query($connection, $sql);
    while ($getData = mysqli_fetch_array($result)) {
        ?>
<form action ="updatedata.php" method = "POST">
            <div class = "col-lg-offset-3" >
                ID
                <input type = "text" name = "id" value="<?php echo $getData["id"]; ?>" placeholder = "ID" style = "padding: 5px 50px 5px 5px;">
            </div>
            <div class = "col-lg-offset-3" >
                FirstName
                <input type = "text" name = "firstname" value="<?php echo $getData["firstname"]; ?>" placeholder = "FirstName" style = "padding: 5px 50px 5px 5px;">
            </div>
            <div class = "col-lg-offset-3" >
                LastName
                <input type = "text" name = "lastname" value="<?php echo $getData["lastname"]; ?>" placeholder = "LastName" style = "padding: 5px 50px 5px 5px;">
            </div>
            <div class = "col-lg-offset-3" >
                Email
                <input type = "text" name = "email" value="<?php echo $getData["email"]; ?>" placeholder = "Email">
            </div>
            <div class = "col-lg-offset-3" >
                Password
                <input type = "text" name = "password" value="<?php echo $getData["password"]; ?>"  placeholder = "Password" style = "padding: 5px 50px 5px 5px;">
            </div>
            <input type ="submit" name ="editdata" value="UpdateData" class = "col-lg-offset-3" />
        </form>
       
        <?php
    }
}
?>