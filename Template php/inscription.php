<?php
 $nom = $_POST["nom"];
 $prenom = $_POST["prenom"];
 $age = $_POST["age"];
 
 $conn = new mysqli('localhost', 'root', 'root', 'daim');
if ($conn->connect_error) {
    die('Connection failed: ' . $cconn->connect_error);
} else {
     $stmt = $conn->prepare("INSERT into test(nom, prenom, age) values (?, ?, ?)");
     $stmt->bind_param("ssss", $nom, $prenom, $age);
     $stmt->execute();
     echo "<script>alert('Inscription reussie'); window.location='index.php'</script>";
     $stmt->close();
     $conn->close();
 }
 ?>