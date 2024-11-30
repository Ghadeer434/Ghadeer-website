<?php
$servername = "localhost";
$username = "root"; 
$password = "ghadeer@123";     
$dbname = "CSCI426_Projectt"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO submissions (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: contact.php");
    exit;
}

$sql = "SELECT * FROM submissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Name:</strong> " . $row['name'] . "<br>";
        echo "<strong>Email:</strong> " . $row['email'] . "<br>";
        echo "<strong>Subject:</strong> " . $row['subject'] . "<br>";
        echo "<strong>Message:</strong> " . $row['message'] . "<br>";
        echo "<strong>Submitted At:</strong> " . $row['submitted_at'] . "</p><hr>";
    }
} else {
    echo "No submissions found.";
}

$conn->close();
?>

   
    </p>
</body>
</html>

