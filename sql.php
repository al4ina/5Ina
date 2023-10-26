<?php 
$servername='localhost';
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());

}else{
    echo "Connected successfully";
}

$database='ksiegarnia';
$sql="CREATE DATABASE $database";
if (mysqli_query($conn, $sql)){
    echo "<br>Database created succesfully";

}else{
    echo "<br>Error creating database: ".mysqli_error($conn);
}

if (mysqli_select_db($conn,$database)){
    echo "<br>Database $database selected";
}
else{
    echo "<br>Error select database: ".mysqli_error($conn);
}
// $sql="CREATE TABLE MyGuest(
//                         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                         firstname VARCHAR(30) NOT NULL,
//                         lastname VARCHAR(30) NOT null,
//                         email VARCHAR(50),
//                         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
// if (mysqli_query($conn, $sql)){
// echo "<br>Table MyGuest created successfully";
// }else{
//     echo "<br>Error creating table: ".mysqli_error($conn);
// }

// $sql = "INSERT INTO MyGuest (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuest (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuest (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if(mysqli_multi_query($conn, $sql)){   
//     echo "New records created successfully";
// }else{
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// $sql="SELECT id,firstname,lastname from myguest";
// $result=mysqli_query($conn, $sql);
// echo "<table>";

// if (mysqli_num_rows($result)> 0){
//     while($row=mysqli_fetch_assoc($result)){
//         echo ""."<td>id: ".$row['id'].""."</td>"."<td>-Name: ".$row["firstname"].""." ".$row["lastname"]."</td>"."";
// }
// }else{
//     echo "0 RESULTS";
// }
// echo "<?table>";

// $sql="SELECT id,firstname,lastname from myguest";
// $result=mysqli_query($conn, $sql);
// if (mysqli_num_rows($result)> 0){
//     while($row=mysqli_fetch_assoc($result)){
//         echo "id: ".$row['id']."-Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
// }
// }else{
//     echo "0 RESULTS";
// }

// $sql="DELETE FROM myguest where id=3";

// if (mysqli_query($conn, $sql)){
//     echo "Record deleted succesffuly";
// }else{
//     echo 'Error deleting record: '.mysqli_error($conn);
// }

// $sql="UPDATE myguest SeT lastname='DOOOOE' where id = 2";

// if (mysqli_query($conn, $sql)){
//     echo "Record updated succesffuly";
// }else{
//     echo 'Error updating record: '.mysqli_error($conn);}

    // $sql="SELECT id,firstname,lastname from myguest";
    // $result=mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result)> 0){
    //     while($row=mysqli_fetch_row($result)){
    //         echo "id: ".$row[0]."-Name: ".$row[1]." ".$row[2]."<br>";
    // }
    // }else{
    //     echo "0 RESULTS";
    // }

    // $sql="SELECT id,firstname,lastname from myguest";
    // $result=mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result)> 0){
    //     echo "<table>";
    //     while($row=mysqli_fetch_row($result)){
    //         echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td> ".$row[2]."</td><tr>";
    // }
    // echo "</table>";
    // }else{
    //     echo "0 RESULTS";
    // }

    // $sql="SELECT id,firstname,lastname from myguest";
    // $result=mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result)> 0){
    //     echo "<ul>";
    //     while($row=mysqli_fetch_row($result)){
    //         echo "<li>".$row[0]." ".$row[1]." ".$row[2]."</li>";
    // }
    // echo "</table>";
    // }else{
    //     echo "0 RESULTS";
    // }
 
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $fav_language=$_POST["fav_language"];
    $sql="INSERT INTO myguest(firstname,lastname,fav_language) VALUES ('$firstname','$lastname','$fav_language')";

echo $sql;
if(mysqli_query($conn, $sql)){   
        echo "New records created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>