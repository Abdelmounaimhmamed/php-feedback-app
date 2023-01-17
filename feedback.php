<?php include "./includes/header.php" ?>


<?php 

$sql = 'select * from feedback' ;
$result = mysqli_query($connet,$sql);
$feedback = mysqli_fetch_all($result , MYSQLI_ASSOC);

?>





<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>


    <?php if(empty($feedback)): ?>
      <p class="lead mt3">there is no feed back </p>

    <?php endif;?>


    <?php foreach($feedback as $item): ?>

    
    <div class="card my-3 w-75">
     <div class="card-body">
      <?php echo $item["body"] ; ?>
    </div>
   </div>

   <?php endforeach; ?>

   
  </div>
</main>

<?php include "./includes/footer.php" ?>