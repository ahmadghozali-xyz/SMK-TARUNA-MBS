<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<style>
body{
  font-family:Poppins;
  background:#1b4332;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}
.box{
  background:white;
  padding:30px;
  border-radius:10px;
  width:300px;
}
input{width:100%;padding:10px;margin:10px 0}
button{
  width:100%;
  padding:10px;
  background:#2d6a4f;
  color:white;
  border:none;
}
</style>
</head>
<body>

<div class="box">
<h2>Login Admin</h2>

<form action="proses_login.php" method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button type="submit">Login</button>
</form>

</div>

</body>
</html>