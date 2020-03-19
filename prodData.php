<?php 
$id = $_GET['id'];
$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

?>
<style>
   .contain{
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color: rgb(46, 49, 51);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin: 50px 0px 50px 0px;
    width: 100%;
    padding: 5vh 0vh 5vh 0vh;
   }
   .info-row{
      margin: 0 auto; 
      margin-bottom: 5vh;
      width: 70%; 
      display: flex; 
      flex-direction: row; 
      justify-content: flex-start;
   }
   .info-col{
      margin: 0 auto; 
      margin-bottom: 5vh;
      width: 70%; 
      display: flex; 
      flex-direction: column; 
      justify-content: flex-start;
   }
   .info{
      max-width: 100%;
      min-width: 50%;
      text-align: left;
   }
</style>

   <div class="empty-view"></div>
<div class="header-top"><h1>Product Information</h1></div>

<div class="contain">
   <div class="info-row">
      <div class="info"><h2 color="#45a29e" >Name:</h2></div>
      <div class="info"><h2><?php echo $list['name'];?></h2></div>
   </div>
   <div class="info-row">
      <div class="info">
          <h2 color="#45a29e" >Price:</h2>
      </div>
       <div class="info">
          <h2> <?php echo "P".$list['price'];?></h2>
      </div>
   </div>
   <div class="info-col">
      <div class="info" style="margin-bottom: 5vh;">
          <h2 color="#45a29e" >Description:</h2>
      </div>
       <div class="info">
          <h2> <?php echo $list['description'];?></h2>
      </div>
   </div>
   <div class="info-row">
      <div class="info">
          <h2 color="#45a29e" >Category:</h2>
      </div>
       <div class="info">
          <h2><?php echo $list['category_name'];?>
      </div>
   </div>
 </div>

<div class="div-align-buttons">
   <a href="index.php?module=editProd&id=<?php echo $list['id'];?>""><div class="button-custom">EDIT</div></a><br>
   <a href="index.php?module=deleteProd&id=<?php echo $list['id'];?>""><div class="button-custom" style="background-color: red !important;">DELETE</div></a>
</div>
