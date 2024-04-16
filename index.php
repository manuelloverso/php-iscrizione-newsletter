<?php 

session_start();

include_once __DIR__ . '/functions.php';

$email= $_GET['email'];

$message = showMessage(isAnEmail($email));

$_SESSION['message']= $message;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>
<body>
    <div class="container">
       <form action="" method="get">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="text"
                class="form-control"
                name="email"
                id=""
                aria-describedby="emailHelpId"
                placeholder="abc@mail.com"
                <?php  
                    if (isAnEmail($email) == false) {
                        echo "value='$email'";
                    }
                ?>
            />
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
        
       </form>

       <?php if (isset($email) && $email != '') : ?>
        <div
            class="alert alert-<?= $message['class'] ?>"
            role="alert"
        >
            <strong> <?= $message['status'] ?> </strong>
        </div>
        
       <?php endif; ?>

    </div>
     

</body>
</html>