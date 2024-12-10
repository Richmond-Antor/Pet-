<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styles/header_style.css"> <!-- Adjusted path -->
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar text-right py-2" style="background-color: #FFD700;">
        <span class="mr-3">Smart Platform for Pet Adoption, Care, and Service Management</span>
    </div>
    
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFBEA;">
        <a class="navbar-brand font-weight-bold" href="../index/index.php">
            <i class="fas fa-paw text-warning"></i> Petবন্ধু
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../index/index.php" class="nav-link">Homepage</a></li>
                <li class="nav-item"><a href="../adoption_sec/adoption.php" class="nav-link">Adoption</a></li>
                <li class="nav-item"><a href="../shop/shop.php" class="nav-link">Shop</a></li>
                <li class="nav-item"><a href="../vet_services/vet_services.php" class="nav-link">Vet Service</a></li>
                <li class="nav-item"><a href="../about_us/about_us.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="../contact/contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="../account/account.php" class="nav-link">Account</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i> <span class="badge badge-pill badge-warning">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
