<?php
// Include database configuration
include 'config.php';

// Start session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Prepare SQL to check user credentials
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Validate credentials
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: index.html"); // Redirect to dashboard
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="stylelogin.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <form action="" method="POST">
        <h1>Login</h1>

        <?php if (!empty($error)): ?>
          <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <div class="input-box">
          <input type="text" name="username" placeholder="username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" />Remember me</label>
          <a href="register.php">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
