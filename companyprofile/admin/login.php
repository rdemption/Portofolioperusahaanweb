
<?php
session_start(); // Memulai sesi

// Cek apakah form login sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password (misalnya admin123)
    if ($username == "admin" && $password == "admin123") {
        // Jika login berhasil, set session dan arahkan ke halaman.php
        $_SESSION["loggedin"] = true;
        header("Location: halaman.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!-- Form login -->
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php
// Menampilkan pesan error jika login gagal
if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p.error {
            color: red;
            margin-top: 10px;
        }
    </style>