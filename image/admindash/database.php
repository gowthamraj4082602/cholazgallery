    <?php
    $servername = "localhost";
    $database = "u357307178_insurance";
    $username = "u357307178_insurance";
    $password = "Insurance1";
    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
   
    ?>