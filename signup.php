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
                        <li><a href="signin.html" >Contact us</a></li>
                        <li><a href="signup.html" class="cta">Login</a></li>
                    </ul>
                </nav>
    </header>

    <div class="main_container">
        <!-- Animated circles -->
        <span class="animate" style="--count:5;"></span>
        <span class="animate" style="--count:3;"></span>
        <span class="animate" style="--count:4;"></span>
        <span class="animate" style="--count:2;"></span>

        <!-- Form -->
        <form action="welcome.php" method="POST" class="login_form">
            <h1>SIGN UP</h1>

            <div class="group">
                <input type="text" id="fname" name="fname" required>
                <label>First Name</label>
                <span class="icon">
                    <i class="fa fa-user"></i>
                </span>
            </div>

            <div class="group">
                <input type="text" id="lname" name="lname" required>
                <label>Last Name</label>
                <span class="icon">
                    <i class="fa fa-user"></i>
                </span>
            </div>

            <div class="group">
                <input type="text" id="username" name="username" required>
                <label>Username</label>
                <span class="icon">
                    <i class="fa fa-user"></i>
                </span>
            </div>

            <div class="group">
                <input type="email" id="email" name="email" required>
                <label>Email Address</label>
                <span class="icon">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>

            <div class="group">
                <input type="text" id="address" name="address" required>
                <label>Address</label>
                <span class="icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </span>
            </div>

            <div class="group">
                <input type="text" id="address" name="address" required>
                <label>Zip-Code</label>
                <span class="icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </span>
            </div>

            <div class="group">
                <input type="tel" id="phone" name="phone" required>
                <label>Phone</label>
                <span class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrapper">
                <input type="radio" name="gender" id="option-1" value="M" checked>
                <input type="radio" name="gender" id="option-2" value="F">
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>Male</span>
                </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>Female</span>
                </label>
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
                <input type="password" id="confirm_password" name="confirm_password" required>
                <label>Confirm Password</label>
                <span class="icon">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <i class="fas fa-eye toggle-password" id="toggleConfirmPassword"></i>
                </span>
            </div>

            <div class="group">
                <p>Do you already have an account? <a href="login.php">Yes/Sign In</a></p>
            </div>

            <button class="btn1" id="myBtn" type="submit">Sign Up</button>
        </form>
    </div>

    <script>
        // Set the target date to the next Halloween (October 31st)
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




        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password"),
            togglePassword = document.getElementById("togglePassword"),
            toggleConfirmPassword = document.getElementById("toggleConfirmPassword");

        function validatePassword() {
            if (password.value !== confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

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

        toggleConfirmPassword.addEventListener("click", function() {
            if (confirm_password.type === "password") {
                confirm_password.type = "text";
                toggleConfirmPassword.classList.remove("fa-eye");
                toggleConfirmPassword.classList.add("fa-eye-slash");
            } else {
                confirm_password.type = "password";
                toggleConfirmPassword.classList.remove("fa-eye-slash");
                toggleConfirmPassword.classList.add("fa-eye");
            }
        });
    </script>
</body>

</html>