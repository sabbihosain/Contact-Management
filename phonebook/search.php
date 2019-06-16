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
                                if (isset($_REQUEST["searchTerm"])) {
                                $SEARCHTERM=$_REQUEST['searchTerm'];
                                $sqlData = "SELECT * FROM users  WHERE firstname LIKE '%$SEARCHTERM%'";
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
                                        <td><button><a href="update.php?id=<?php echo $showData['id']; echo $showData['firstname']; echo $showData['lastname'];  echo $showData['email']; echo $showData['password']; ?>">updata</a></button> | <button> <a href="deletecontact.php?id=<?php echo $showData['id']; ?>">Delete</a></button></td>
                                        <td><button><a href="">Send</a></button> | <button <a href="">View</a></button></td>
                                    </tr>        
                                    <?php
                                }
                            }
                                }
                            ?>
                        </table>
                   </form>