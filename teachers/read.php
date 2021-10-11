<?php


// connect to the datbase

// database credentials
$server_name = "localhost";
$server_username ="root";
$server_password = "";
$db_name = "school";

// create connection
$connection = mysqli_connect($server_name, $server_username, $server_password, $db_name);

//check the connection
if(!$connection){
    die("Connection Failed: ".  mysqli_connect_error());
} else {
    echo "Connected to database successfully";
}
$query = "SELECT * FROM teachers";
$result = mysqli_query($connection,$query);

$teachers = mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($teachers);
?>

<table>
<tr>
        <th>id</th>
        <th>name</th>
        <th>dob</th>
        <th>age</th>
        <th>email</th>
        <th>department</th>
        <th>qualification</th>
        <th>annualsalary</th>
        <th>mobileno</th>
        <th>action</th>
    </tr> 
    <?php
    foreach ($teachers as $teacher) { ?>
    <tr>
        <td><?php echo $teacher['id']; ?></td>
        <td><?php echo $teacher['name']; ?></td>
        <td><?php echo $teacher['dob']; ?></td>
        <td><?php echo $teacher['age']; ?></td>
        <td><?php echo $teacher['email']; ?></td>
        <td><?php echo $teacher['department']; ?></td>
        <td><?php echo $teacher['qualification']; ?></td>
        <td><?php echo $teacher['annualsalary']; ?></td>
        <td><?php echo $teacher['mobileno']; ?></td>
        <td>
        <a href="edit.php?id=<?php echo $teacher['id']; ?>" class="btn btn-success">edit</a>
        </td>
    </tr>  
    <?php
    }
    ?>
</table>