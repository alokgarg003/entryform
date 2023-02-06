<?php
$servername = "localhost";
$username = "id20248375_responsibepage";
$password = "HARSHgarg@003";
$dbname = "id20248375_form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!-- Check if the form was submitted -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Insert the data into the database
    $sql = "INSERT INTO form (name, email, mobile) VALUES ('$name', '$email', '$mobile')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php
mysqli_close($conn);
?>
