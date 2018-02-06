
<?php

$link = mysqli_connect("au-cdbr-sl-syd-01.cleardb.net", "bdbdcead07e6bb", "f2c688a3", "ibmx_0dd36c62cf754de");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


$sname=$_POST['sname'];
$rollno=$_POST['rollno'];
$dept=$_POST['dept'];
$cat=$_POST['cat'];
$message=$_POST['message'];

$sql = "INSERT INTO studentfeedback (name,rollno,dept,cat,message) VALUES ('$sname','$rollno','$dept','$cat','$message')";
    if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        $sql="SELECT * from studentfeedback ORDER BY FID DESC limit 5";
        $result = mysqli_query($link,$sql);
        echo "<table border='1'>
        <tr>
        <th>fid</th>
        <th>name</th>
        <th>Roll no</th>
        <th>dept</th>
        <th>cat</th>
        <th>message</th>
        </tr>";

while ($row = mysqli_fetch_array($result)) {

?>
        <tr>
            <td><a href="id.php?id=<?php echo $row['fid'];?>">
                     <?php echo $row['fid']; ?></td> </a>
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['rollno']; ?></td> 
            <td><?php echo $row['dept']; ?></td> 
            <td><?php echo $row['cat']; ?></td> 
            <td><?php echo $row['message']; ?></td> 
            
        </tr>
        <?php
    }
       //     header("Location:login.php");
    } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        
    //}



mysqli_close($link);

?>