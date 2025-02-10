<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="page-title">
        <span class="highlight c1">CCS</span> Sit-In <span class="highlight c2">Monitoring</span> System
    </h1>
    <div class="container" id="signup" style="display:none;">
        <div class="logo-container">
            <img src="img/uc.png" alt="Logo 1" class="logo-right">
            <img src="img/ccs.png" alt="Logo 2" class="logo-left">
        </div>
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-id-card"></i>
                <input type="text" name="idNo" id="idNo" placeholder="ID Number" required>
                <label for="idNo">ID Number</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="mName" id="mName" placeholder="Middle Name">
                <label for="mName">Middle Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-book"></i>
                <input list="courses" name="course" id="course" placeholder="Course" required>
                <datalist id="courses">
                    <option value="BS in Accountancy">
                    <option value="BS in Business Administration">
                    <option value="BS in Computer Engineering">
                    <option value="BS in Criminology">
                    <option value="BS in Customs Administration">
                    <option value="BS in Information Technology">
                    <option value="BS in Computer Science">
                    <option value="BS in Office Administration">
                    <option value="BS in Social Work">
                    <option value="Bachelor of Secondary Education">
                    <option value="Bachelor of Elementary Education">
                </datalist>
                <label for="course">Course</label>
            </div>
            <div class="input-group">
                <i class="fas fa-calendar"></i>
                <input list="yearLevels" name="yearLevel" id="yearLevel" placeholder="Year Level" required>
                <datalist id="yearLevels">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <!-- Add more year levels as needed -->
                </datalist>
                <label for="yearLevel">Year Level</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <div class="logo-container">
            <img src="img/ccs.png" alt="Logo 2" class="logo-left">
            <img src="img/uc.png" alt="Logo 1" class="logo-right">
        </div>
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>