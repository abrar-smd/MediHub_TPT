<!DOCTYPE html>
<html>

<head>
    <title>Hospital Login Page</title>
    <link rel="stylesheet" type="text/css" href="loginstyles1.css">
    <link rel="icon" href="https://us.123rf.com/450wm/mantinov/mantinov2004/mantinov200400007/143789285-help-for-health-icon-logo-vector-graphic-design-helping-hands-inside-medical-cross-sign.jpg?ver=6" type="image/x-icon">
</head>
<body>
    <div class="container" id="main">
        <div class="Register">
            <form action="connect1.php" method="post">
                <h1>Create Account</h1>
                <input type="text" name="txt" placeholder="Name" required="">
                <input type="tel" name="phn" placeholder="Phone" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button>Sign Up</button>
            </form>       
        </div>
        <div class="registration-message">
            <?php
            if (isset($_GET['message'])) {
                echo $_GET['message'];
            }
            ?>
        </div>
        <?php
    if (isset($error_msg)) {
        echo "<h2>$error_msg</h2>";
    }
    ?>
        <div class="log-in">
            <form action="login1.php" method="post">
                <h1>LOGIN</h1>
                <input type="email" name="email" placeholder="ID" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <a href="./frogpass.html">Forgot Password?</a>
                <a href='./homepage1.html'>
        <button class="GFG">
            Login
        </button>
    </a>
                <!-- <a href="homepage1.html"></a> -->
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back</h1>
                    <img class="img1" src="https://media.istockphoto.com/id/1139549801/vector/stethoscope-heart-icon.jpg?s=612x612&w=0&k=20&c=qEJ7fFxWkok8j7FYYj4NwAlHSgqsw-azZz7c3IQJ4KI=" width="150px" height="120px" style="border: none;">
                    <p>Kindly Login to Experince Our Service</p>
                    <button id="signIn">LOGIN</button>
                </div>
                <div class="overlay-right">
                    <h1>Medi Hub-TPT</h1>
                    <img class="imgs" src="https://us.123rf.com/450wm/mantinov/mantinov2004/mantinov200400007/143789285-help-for-health-icon-logo-vector-graphic-design-helping-hands-inside-medical-cross-sign.jpg?ver=6">
                    <p>Start a Healthy Journey With Us </p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () => {
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            main.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>