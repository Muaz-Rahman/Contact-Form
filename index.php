<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styling/index.css">
    <script src="https://kit.fontawesome.com/d2c27e5b32.js" crossorigin="anonymous"></script>
    <title>Contact Me!</title>
</head>
<body>

<div class="header">
    <h2>Let me know what you think! </h2>
    <p>Fill the form up to get into touch </p>
</div>

<div  id="login"><button onclick="window.location.href='login.php';">Log In</button></div>

<div class="container">
    <div class="bg">
        <h2>My Contact Information</h2>
        <div class="iconboxes">
            <i class="fas fa-phone"></i>
            <p>012345678</p>
        </div>
        <div class="iconboxes"><i class="fas fa-envelope"></i>
            <br> <a href="mailto:mrfarazi98@gmail.com">mrfarazi98@gmail.com</a></div>
        <div class="iconboxes"><i class="fab fa-github"></i>
            <br><a href="https://github.com/Muaz-Rahman">Github Profile</a>
            </div>

    </div>

    <div class="form">
        <form action="sqlconnector.php" method="post">
            <p>Name: </p>
            <input type="text" name="name" required="required" placeholder="John Doe">
            <p>Email Address: </p>
            <input type="text" name="email" required="required" placeholder="abcd@abcd.com">
            <p>Phone Number</p>
            <input type="text" name="phone" required="required" placeholder="012345678">
            <p>Comments</p>
            <textarea placeholder="Place your feedbacks here..." name="comment"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

</div>

</body>
</html>


<!-- Right now what I need to do are
 1 I need to create session for login purposes and making the logged in state persist.
 2 I need to create a view model that allows me to pull data from sql and show it in the webpage in a formatted way.
 which means I need to show the feedback data in the adminpage view
  -->