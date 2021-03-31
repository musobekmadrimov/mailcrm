<?php 
include('db.php');

// ================ NEW CITY ================= //

if(isset($_POST['newCityButton'])){
    try{
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    
    $sql = "INSERT INTO `city`(`name`, `zip_code`) VALUES(?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$city, $postalcode]);
    $answer = '<div class="alert alert-success" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-cog fa-spin text-white mr-1"></i><strong>Yangi shahar qo\'shildi!</strong>
  </div>';
    } catch(PDOException $e){
        $answer = '<div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-coffee"></i><strong>Alert!</strong>
      '.$e->getMessage().'"</div>';
    }
  }
// ================ NEW CITY end ================= //
  
?>