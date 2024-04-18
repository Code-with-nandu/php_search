<?php
// echo "jay gurudev";
include("config.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM m_visitor WHERE first_name LIKE '{$input}%' OR last_name LIKE '{$input}%' OR mobile LIKE '{$input}%' OR email LIKE '{$input}%' OR notes LIKE '{$input}%' OR token LIKE '{$input}%' OR password LIKE '{$input}%' LIMIT 5 ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) { ?>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Notes</th>
                    <th>Token</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $mobile = $row['mobile'];
                    $email = $row['email'];
                    $notes = $row['notes'];
                    $token = $row['token'];
                    $password = $row['password'];
                
                ?> 
                <tr>
                    <td><?php echo $id ; ?></td>
                    <td><?php echo $first_name ; ?></td>
                    <td><?php echo $last_name ; ?></td>
                    <td><?php echo $mobile ; ?></td>
                    <td><?php echo $email ; ?></td>
                    <td><?php echo $notes ; ?></td>
                    <td><?php echo $token ; ?></td>
                    <td><?php echo $password ; ?></td>
                </tr>
                
                <?php   
                }
                ?>
            </tbody>
        </table>


<?php

    } else {
        echo "<h6 class='text-danger text-center mt-3'>No Data Found </h6>";
    }
}

?>