<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="hogwartshd.jpg">
    <div class="hayhay">
    <div class="background-container">
        <img src="hogwartshd.jpg" class="background-image" alt="Hogwarts Background">
    </div>
    <div class="login-container">
        <h1>Welcome to Hogwarts</h1>
        <p class="welcome-message">"Welcome to Hogwarts, young wizard!" - Albus Dumbledore</p>
        
        
        <form action="loginProcess.php" method="post" >
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <p class="password-hint">Hint: The spell for unlocking doors.</p>
            </div>
            <button type="submit" class="login-button">Enter</button>
        </form>

        <div class="portraits">
            <img src="portrait1.jpg" class="portrait" alt="Portrait">
            <img src="portrait2.jpg" class="portrait" alt="Portrait">
        </div>
    </div>

    <!-- Floating candles -->
    <div class="candles">
        <img src="candle1.png" class="candle" id="candle1" alt="Candle">
        <img src="candle2.png" class="candle" id="candle2" alt="Candle">
        <img src="candle2.png" class="candle" id="candle3" alt="Candle">
    </div>
    
    <!-- Flying owl -->
    <img src="owl.png" class="owl" alt="Owl">
    </div>
</body>
</html>

