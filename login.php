<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ayuruveda | About Us</title>

    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>

    <section class="login-panel">
        <div class="container mt-5 mb-5">
            <div class="form-modal">

                <div class="form-toggle">
                    <button id="login-toggle" onclick="toggleLogin()">log in</button>
                    <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
                </div>

                <div id="login-form">
                    <form>
                        <input type="text" placeholder="Enter email or username" />
                        <input type="password" placeholder="Enter password" />
                        <button type="button" class="btn login">login</button>
                        <hr />

                    </form>
                </div>

                <div id="signup-form">
                    <form>
                        <input type="text" placeholder="Full Name" />
                        <input type="email" placeholder="Email Address" />
                        <input type="text" placeholder="Phone Number" />
                        <input type="text" placeholder="Address" />
                        <input type="password" placeholder="password" />
                        <button type="button" class="btn signup">create account</button>
                        <hr />

                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- Navbar and Header -->
    <?php require('includes/footer.php') ?>
    <script>
    function toggleSignup() {
        document.getElementById("login-toggle").style.backgroundColor = "#fff";
        document.getElementById("login-toggle").style.color = "#222";
        document.getElementById("signup-toggle").style.backgroundColor = "#57b846";
        document.getElementById("signup-toggle").style.color = "#fff";
        document.getElementById("login-form").style.display = "none";
        document.getElementById("signup-form").style.display = "block";
    }

    function toggleLogin() {
        document.getElementById("login-toggle").style.backgroundColor = "#57B846";
        document.getElementById("login-toggle").style.color = "#fff";
        document.getElementById("signup-toggle").style.backgroundColor = "#fff";
        document.getElementById("signup-toggle").style.color = "#222";
        document.getElementById("signup-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
    }
    </script>
</body>

</html>