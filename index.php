<?php include "./includes/header.php" ?>


<?php 

$name = $email = $body = '' ;
$nameErr = $emailErr = $bodyErr = '';

if (isset($_POST['submit'])){
  // validate the name 

  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['body'])) {
    $nameErr = "name is required";
    $emailErr = "email  is required ";
    $bodyErr = "body is required" ;
    echo "<p> we can not submit any empty data</p>" ;
  }else { 
    $name = filter_input(INPUT_POST , 'name' , FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST , 'email' , FILTER_SANITIZE_SPECIAL_CHARS);
    $body = filter_input(INPUT_POST , 'body' , FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "insert into feedback VALUES (5,'$name','$email','$body','2023-12-12');";
    if (mysqli_query($connet,$sql)){
      header('Location: /feedback.php');
    }else { 
      echo "error whie sending data " . mysqli_error($connet);
    }
  }
}


?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Abdelmounaim</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

    
    </div>
</main>
<?php include "./includes/footer.php" ?>