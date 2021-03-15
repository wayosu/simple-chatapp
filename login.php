<?php include_once "layout/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
            </form>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>