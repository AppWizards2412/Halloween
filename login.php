<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

        body {
            margin: 0;
            background-color: #1a1a1a;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        

    </style>
</head>
    <body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Manas Store Logo" width="50" height="50">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="category.html">Category</a></li>
                <li><a href="signin.html">Contact Us</a></li>
                <li><a href="signup.html" class="cta">Login</a></li>
            </ul>
        </nav>
    </header>


        </div>

    <div class="main_container">
        <!-- Animated circles -->
        

        <!-- Inside <div class="main_container"> -->
        <div class="main_container">
        <!-- Animated circles -->
        <span class="animate" style="--count:5;"></span>
        <span class="animate" style="--count:3;"></span>
        <span class="animate" style="--count:4;"></span>
        <span class="animate" style="--count:2;"></span>


        <!-- Login Form -->
        <form action="login_process.php" method="POST" class="login_form">
            <h1>LOGIN</h1>

            <div class="group">
                <input type="text" id="username" name="username" required>
                <label>Username</label>
                <span class="icon">
                    <i class="fa fa-user"></i>
                </span>
            </div>

            <div class="group">
                <input type="password" id="password" name="password" required>
                <label>Password</label>
                <span class="icon">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </span>
            </div>

            <div class="group">
                <p>Don't have an account yet? <a href="signup.php">Sign Up</a></p>
            </div>

            <button class="btn1" id="myBtn" type="submit">Log In</button>
        </form>
    </div>

    <script>
        // Password toggling script
        var password = document.getElementById("password"),
            togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", function() {
            if (password.type === "password") {
                password.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                password.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
        });

        // Countdown script
        const targetDate = new Date("October 31, " + new Date().getFullYear());

        function updateCountdown() {
            const currentDate = new Date();
            const timeRemaining = targetDate - currentDate;

            if (timeRemaining <= 0) {
                document.getElementById("countdown").textContent = "Halloween is here!";
            } else {
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.getElementById("countdown").textContent = `Countdown: ${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>
