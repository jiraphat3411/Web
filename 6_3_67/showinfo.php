<?php
require 'connection.php';
$sql="select * from PersonInfo;";
$result = $conn->query($sql);

if($result->num_rowws>0){
    echo "<table border=1>";
    echo "<tr><td>No.</td><td>Name</td><td>Age</td><td>Country</td><td>Gender</td><td>Language</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['ID']."</td><td>"
        .$row['Name']."</td><td>"
        .$row['Age']."</td><td>"
        .$row['Country']."</td><td>"
        .$row['Gender']."</td><td>"
        .$row['Language']."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0 rows available";
}
$conn->close();
?>