<?php
include 'connection.php';
$sql_count_user = "SELECT COUNT(*) FROM users";
$sql_count_theloai = "SELECT COUNT(*) FROM theloai";
$sql_count_tacgia = "SELECT COUNT(*) FROM tacgia";
$sql_count_baiviet = "SELECT COUNT(*) FROM baiviet";
$result_count_user = mysqli_query($conn, $sql_count_user);
$result_count_theloai = mysqli_query($conn, $sql_count_theloai);
$result_count_tacgia = mysqli_query($conn, $sql_count_tacgia);
$result_count_baiviet = mysqli_query($conn, $sql_count_baiviet);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="./">Trang ch???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Trang ngo??i</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">Th??? lo???i</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author.php">T??c gi???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article.php">B??i vi???t</a>
                        </li>
                    </ul>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
        </nav>
    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">C???M NH???N V??? B??I H??T</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Ng?????i d??ng</a>
                        </h5>
                        <h5 class="h1 text-center">
                            <?php 
                            echo(mysqli_fetch_array($result_count_user)[0]);
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="category.php" class="text-decoration-none">Th??? lo???i</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo mysqli_fetch_array($result_count_theloai)[0] ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="author.php" class="text-decoration-none">T??c gi???</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                            $count_tacgia = mysqli_fetch_array($result_count_tacgia)[0];
                            echo $count_tacgia;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="article.php" class="text-decoration-none">B??i vi???t</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                            $count_baiviet = mysqli_fetch_array($result_count_baiviet)[0];
                            echo $count_baiviet;
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>