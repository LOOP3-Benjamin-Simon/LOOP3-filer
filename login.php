<?php
require_once('includes/header.php');
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email_temp = $_POST['email'];
    $password_temp = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email_temp'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "<p class='error'>MySQL Error: " . mysqli_error($con) . ".</p>";
        require_once('includes/footer.php');
        die();
    } elseif (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];
        $email = $row['email'];
        $password = $row['password'];

        $token = (password_verify($password_temp, $password));

        if ($token == $password) {
            $_SESSION['user_id'] = $user_id;
            $query2 = "SELECT * FROM user_info WHERE user_id = '$user_id'";
            $result2 = mysqli_query($con, $query2);
            if (!$result2) {
                echo "<p class='error'>MySQL Error: " . mysqli_error($con) . ".</p>";
                require_once('includes/footer.php');
                die();
            } else {
                $row2 = mysqli_fetch_assoc($result2);
                $first_name = $row2['first_name'];
                $last_name = $row2['last_name'];
                $level = $row2['level'];
                $_SESSION['level'] = $level;
                header("Refresh:2; url=index.php");
                echo "<p class='welcome'>Welcome " . $first_name . " " . $last_name . ". You are now logged in.</p>";
                require_once('includes/footer.php');
            }
        } else {
            echo "<p class='error'>Invalid username/password combination.</p>";
            require_once('includes/footer.php');
        }
    }
} else {
?>

<main role="main">
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
}
require_once('includes/footer.php');
?>