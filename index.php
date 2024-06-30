<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <label class="navbar-brand">Hogwarts School of Witchcraft and Wizardry</label>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php" class="btn btn-gold navbar-btn">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="section_1">
        <label class="img_text"></label>
        <img class="main_img" src="hallroom.jpg" >
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome" src="hogwarts.avif" >

            </div>
            <div class="col-md-8">
                <h1> Welcome to Hogwarts </h1>
                <p>Welcome to Hogwarts, the prestigious School of Witchcraft and Wizardry! Founded over a millennium ago by four legendary wizards and witches, Hogwarts is the premier institution for magical education. Here, students embark on a journey of discovery, honing their magical abilities while forging lifelong friendships. With a comprehensive curriculum and vibrant community spirit, Hogwarts offers an unforgettable adventure filled with magic, friendship, and discovery. Welcome to a world where dreams take flight and magic awaits. Welcome to Hogwarts.</p>

            </div>

        </div>

    </div>
    <div class="ola">
    <center>
        <h1>Our Professors</h1>
    </center>

    </div>

    

    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="alu.jpg" >
                <h2>Albus Dumbledore</h2>
                <p>Dressed in billowing robes and a shimmering moonstone amulet, Albus Dumbledore. Hogwarts' Headmaster, with a beard as long as his wisdom is deep, twinkles his eyes, ready to guide you through the wonders and perils of the magical world.</p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="minevra.jpg" >
                <h2>Minerva McGonagall</h2>
                With a stern gaze that could silence a troll and a wit as sharp as her tartan dress robes, Professor Minerva McGonagall commands respect in the halls of Hogwarts.  A master of Transfiguration, she can turn a teacup into a tortoise with a flick of her wand, but her true magic lies in her unwavering dedication to her students and the unyielding fairness she brings to her role as Deputy Headmistress.

            </div>

             <div class="col-md-4">
                <img class="teacher" src="severes.jpg" >
                <h2>Severus Snape</h2>
                <p>Cloaked in shadows and a perpetual scowl, Severus Snape, Potions Master at Hogwarts.  A master of his craft, his sharp wit and dark secrets keep both students and teachers on their toes.  Don't be fooled by the sneer - there's more to this enigmatic professor than meets the eye.</p>

            </div>


        </div>

    </div>
    <div class="ola">
    <center>
        <h1>Our Courses</h1>
    </center>

    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="hismagic.jpg" >
                <h2>History of Magic</h2>
                
            </div>

            <div class="col-md-4">
                <img class="teacher" src="herbology.jpg" >
                <h2>Herbology</h2>
                

            </div>

             <div class="col-md-4">
                <img class="teacher" src="dark.jpg" >
                <h2>Defence Against the Dark Arts</h2>
                

            </div>


        </div>
        </div>
    <div class="ola">
    <center>
        <h1>Addmission Form</h1>
    </center>
    <?php
            if(@$_GET['Empty']==true){
         ?>
            <div class="alert-light text-danger"><?php echo $_GET['Empty']?></div>
        <?php
            }
        ?>
        <?php
            if(@$_GET['UsernameExists']==true){
         ?>
            <div class="alert-light text-danger"><?php echo $_GET['UsernameExists']?></div>
        <?php
            }
        ?>

<div class="admission_form">
    <form action="accountcreate.php" method="post">
        <div class="form-group">
            <label class="label_text">Username</label>
            <input type="text" class="form-control input-sm" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label class="label_text">Email</label>
            <input type="email" class="form-control input-sm" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label class="label_text">Phone</label>
            <input type="text" class="form-control input-sm" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label class="label_text">User Type</label>
            <input type="text" class="form-control input-sm" id="usertype" name="usertype" required>
        </div>
        <div class="form-group">
            <label class="label_text">Password</label>
            <input type="text" class="form-control input-sm" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" class="btn btn-gold btn-submit" value="Apply">
        </div>
    </form>
</div>
    <footer >
        <h5> All @copywrite reserved by Minhazur Rahman</h5>
    </footer>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
