<?php
include 'koneksi.php';

if(isset($_POST['login'])){
  $u = $_POST['username'];
  $p = $_POST['password'];

  $data = mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
  $d = mysqli_fetch_assoc($data);

  if($d){
    $_SESSION['role'] = $d['role'];
    header("Location: ".$d['role'].".php");
  } else {
    $error = "Username / Password salah!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>LaporSampah.id</title>
<style>
body {
  margin:0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(135deg,#1b5e20,#4caf50);
  height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
}

.card {
  background:white;
  padding:40px;
  width:320px;
  border-radius:15px;
  box-shadow:0 10px 30px rgba(0,0,0,0.2);
  text-align:center;
}

h2 { margin-bottom:20px; }

input {
  width:100%;
  padding:12px;
  margin:10px 0;
  border-radius:8px;
  border:1px solid #ccc;
}

button {
  width:100%;
  padding:12px;
  background:#2e7d32;
  color:white;
  border:none;
  border-radius:8px;
  font-weight:bold;
  cursor:pointer;
}

button:hover {
  background:#1b5e20;
}

.error {
  color:red;
  font-size:14px;
}
</style>
</head>

<body>

<div class="card">
  <h2>LaporSampah.id</h2>

  <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

  <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
  </form>
</div>

</body>
</html>