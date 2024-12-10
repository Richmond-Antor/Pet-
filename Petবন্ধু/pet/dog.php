<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Adoption</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="dog_style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <?php include '../header/header.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Dog Adoption</h1>

        <!-- First Row of Dog Profiles -->
        <div class="row">
            <!-- Dog Profile 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="../image/golden_retriever.jpeg" class="card-img-top full-image" alt="Dog 1">

                    <div class="card-body">
                        <h5 class="card-title">Buddy</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Golden Retriever<br>
                            <strong>Age:</strong> 2 years<br>
                            <strong>Health Status:</strong> Vaccinated
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>

            <!-- Dog Profile 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/dog2.jpg" class="card-img-top" alt="Dog 2">
                    <div class="card-body">
                        <h5 class="card-title">Max</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Labrador<br>
                            <strong>Age:</strong> 3 years<br>
                            <strong>Health Status:</strong> Neutered
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>

            <!-- Dog Profile 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/dog3.jpg" class="card-img-top" alt="Dog 3">
                    <div class="card-body">
                        <h5 class="card-title">Charlie</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Beagle<br>
                            <strong>Age:</strong> 1 year<br>
                            <strong>Health Status:</strong> Vaccinated
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row of Dog Profiles -->
        <div class="row">
            <!-- Dog Profile 4 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/dog4.jpg" class="card-img-top" alt="Dog 4">
                    <div class="card-body">
                        <h5 class="card-title">Rocky</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Bulldog<br>
                            <strong>Age:</strong> 4 years<br>
                            <strong>Health Status:</strong> Vaccinated
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>

            <!-- Dog Profile 5 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/dog5.jpg" class="card-img-top" alt="Dog 5">
                    <div class="card-body">
                        <h5 class="card-title">Bella</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Poodle<br>
                            <strong>Age:</strong> 3 years<br>
                            <strong>Health Status:</strong> Neutered
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>

            <!-- Dog Profile 6 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../image/dog6.jpg" class="card-img-top" alt="Dog 6">
                    <div class="card-body">
                        <h5 class="card-title">Daisy</h5>
                        <p class="card-text">
                            <strong>Breed:</strong> Dachshund<br>
                            <strong>Age:</strong> 2 years<br>
                            <strong>Health Status:</strong> Vaccinated
                        </p>
                        <a href="#" class="btn btn-success">Adopt Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
