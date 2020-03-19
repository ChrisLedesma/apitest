<?php 
$id = $_GET['id'];
$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

?>
<style>
   .info-row{
      margin: 0 auto; 
      margin-bottom: 5vh;
      width: 70%; 
      display: flex; 
      flex-direction: row; 
      justify-content: space-between;
   }
</style>

   <div class="empty-view"></div>
<div class="header-top"><h1>Product Profile</h1></div>

<div style="width: 100%;display: flex; flex-direction: column;">
   <div class="info-row">
      <div><h2>Name:</h2></div>
      <div><h2><?php echo $list['name'];?></h2></div>
   </div>
   <div class="info-row">
      <div>
          <h2>Price:</h2>
      </div>
       <div>
          <h2> <?php echo "P".$list['price'];?></h2>
      </div>
   </div>
   <div class="info-row">
      <div>
          <h2>Description:</h2>
      </div>
       <div>
          <h2> <?php echo $list['description'];?></h2>
      </div>
   </div>
   <div class="info-row">
      <div>
          <h2>Category:</h2>
      </div>
       <div>
          <h2><?php echo $list['category_name'];?>
      </div>
   </div>
 </div>

<div class="div-align-buttons">
   <a href="index.php?module=editProd&id=<?php echo $list['id'];?>""><div class="button-custom">EDIT</div></a><br>
   <a href="index.php?module=deleteProd&id=<?php echo $list['id'];?>""><div class="button-custom" style="background-color: red !important;">DELETE</div></a>
</div>
