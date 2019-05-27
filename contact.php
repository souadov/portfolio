 <?php
//   include"config.php";
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/contact.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
         integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

     <script src="js/jquery-1.12.4.min.js"></script>
     <title>Document</title>
 </head>

 <body>

     <div class="container">


         <form action="insert2.php" class="controle-form" method="post">

             <input type="text" name="username" placeholder="Type your Name" class="form-control" required>
             <i class="fas fa-user"></i>
             <input type="email" name="email" placeholder="Type your Email" class="form-control" required>
             <i class="fas fa-envelope-open-text"></i>
             <input type="text" name="password" placeholder="Type your password" class="form-control" required>
             <i class="fas fa-key"></i>
             <input type="text" name="confirm_pasword" placeholder="Type your confirm your password"
                 class="form-control" required>
             <i class="fas fa-key"></i>
             <input type="text" name="phone" placeholder="Type your numbre phone " class="form-control" required>
             <i class="fas fa-phone-square"></i>

             <input type="submit" class="btn btn-primary btn-block" name="submit" value="Valid">
             <i class="fas fa-paper-plane "></i>
         </form>

     </div>
     <script src="js/bootstrap.min.js"></script>



 </body>

 </html>