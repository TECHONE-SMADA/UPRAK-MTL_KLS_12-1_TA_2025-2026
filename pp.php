<?php
$message = "";
$success = false;

if(isset($_POST['login'])){
    $user = "admin";
    $pass = "12345";

    if($_POST['username'] === $user && $_POST['password'] === $pass){
        $message = "Login Berhasil";
        $success = true;
    } else {
        $message = "Username atau Password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Dinamis</title>
<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(-45deg,#ff9a9e,#fad0c4,#a18cd1,#fbc2eb,#84fab0,#8fd3f4);
    background-size:400% 400%;
    animation:gradientMove 8s ease infinite;
}

.box{
    background:white;
    padding:40px;
    width:320px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
    animation:fade 0.6s ease-in-out;
}

h2{
    margin-bottom:20px;
    color:#333;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:10px;
    border:2px solid #ddd;
    outline:none;
    transition:0.3s;
}

input:focus{
    border-color:#a18cd1;
}

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:10px;
    background:#a18cd1;
    color:white;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
    background:#ff9a9e;
}

.message{
    margin-top:15px;
    font-weight:bold;
    color:<?php echo $success ? "green" : "red"; ?>;
}

@keyframes gradientMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

@keyframes fade{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}
</style>
</head>
<body>

<div class="box">
    <h2>Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Masuk</button>
    </form>

    <?php if($message != ""): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>