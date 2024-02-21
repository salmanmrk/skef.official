



    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['uname'];
    $pass = $_POST['password'];

    // Database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "skef";
    $con = mysqli_connect($host, $username, $password, $database);
    if (!$con) {
        die("Failed to connect: " . mysqli_connect_error());
    }
 
    $stmt = $con->prepare("SELECT * FROM signup WHERE uname=?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $pass) {
            echo "<script>if (confirm('Your Record Successfully Inserted. Now Login'))
             { document.location.href = 'skef.php'; }</script>";
        } else {
            
            echo '<script>alert("Invalid Username or Password")</script>';
            
                    }
    } else {
        echo '<script>alert("Invalid Username or Password")</script>';
            }

    mysqli_close($con); // Close database connection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"
            integrity="sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


</head>
<body>
<div class="wrapper">
    <div class="logo">
        <img src="Preview.jpg" alt="">
    </div>
    <div class="text-center mt-4 name">
        SKEF
    </div>
    <form class="p-3 mt-3" action="" method="POST" onsubmit="return loginValidation();">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="uname" id="userName" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button type="submit" value="submit" id="login" class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="skefsign.php">Sign up</a>
    </div>
</div>


</body>
</html>



</body>
</html>