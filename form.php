<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <span class="pln">
    </span><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">
    </span>
    <title>Forms</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20 ">
            <div>
                <h1>Our Practice Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sit ut similique numquam nobis natus eligendi aperiam fugit nulla molestias non excepturi, quos saepe doloribus deleniti modi quia corporis. Qui?</p>
            </div>
            <div>
                <?php if(isset($_POST['fname']) && !empty($_POST['fname'])):?>
                First Name: <?php echo $_POST['fname'];?> <br>
                <?php endif;?>
                <?php if(isset($_POST['lname']) && !empty($_POST['lname'])): ?>
                Last Name: <?php echo $_POST['lname'];?> <br>
                <?php endif;?>
            </div>
            
            <form action="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
   </div>
</body>
</html>