<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="signin.CSS">
    <style>
        .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
 }
        </style>
</head>
<body>
<div class="main">
    <div class="login-box">
        <div>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        </div>
        <h2>LogIn</h2>
        <form id="GFG" action="check.php" method="post">
            <div class="user-box">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="password" class="pass" id="pssField" name="password" required>
                <label for="pssField">password</label>
            </div>
            <div class="check">
                <input type="checkbox" id="passwordShow" class="show">
                <label for="passwordShow">Show</label>
            </div>
            <button type="submit">
                <span> </span>
                <span> </span>
                <span> </span>
                <span> </span>
                LogIn
            </button>
            <a href="#">
                <span> </span>
                <span> </span>
                <span> </span>
                <span> </span>
                SIGNUP
            </a>
        </form>

    </div>
</div>
<script>
    const show = document.querySelector(".show");
    const pass = document.querySelector(".pass");
    show.addEventListener("click", () => { //handles show password
        if (show.checked) {
            pass.setAttribute("type", "text");
        } else {
            pass.setAttribute("type", "password");
        }
    })
</script>
</body>
</html>
