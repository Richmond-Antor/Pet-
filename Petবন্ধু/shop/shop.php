<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "petbondhu");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Petবন্ধু</title>
</head>
<body>
    <h1>Shop</h1>
    <a href="index.php">Go back to Homepage</a>
    <div>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>
                        <h2>{$row['name']}</h2>
                        <p>Price: {$row['price']} BDT</p>
                        <p>{$row['description']}</p>
                    </div>";
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
</body>
</html>