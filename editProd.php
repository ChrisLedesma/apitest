<?php 
//get product profile
$id = $_GET['id'];
$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];
//get category
$json1 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');

$data1 = json_decode($json1,true);

$list1 = $data1['records'];
?>

<style>
   
   .contain{
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
<div class="header-top"><h1>Edit Product</h1></div>

<div class="contain">
   <form action="editProd_pro.php?id=<?php echo $id;?>" method="POST">
      <div class="info-row">
         <div class="info" style="color: #45a29e;"><h2>Name:</h2></div>
         <div class="info"><input type="text" name="name" value="<?php echo $list['name'];?>" required/></div>
      </div>
      <div class="info-row">
         <div class="info" style="color: #45a29e;">
             <h2>Price:</h2>
         </div>
          <div class="info">
             <input type="number" name="price" value="<?php echo $list['price'];?>" required/>
         </div>
      </div>
      <div class="info-row">
         <div class="info" style="color: #45a29e;"">
             <h2 >Description:</h2>
         </div>
          <div class="info">
             <input type="text" name="description" value="<?php echo $list['description'];?>" required/>
         </div>
      </div>
      <div class="info-row">
         <div class="info" style="color: #45a29e;">
             <h2>Category:</h2>
         </div>
          <div class="info">
             <select name="category" required>
                 <option value="<?php echo $list['category_id'];?>"><?php echo $list['category_name'];?></option>
                <?php
                    foreach($list1 as $value1){?>
                    <option value="<?php echo $value1['id'];?>"><?php echo $value1['name'];?></option>
            <?php
                }
            ?>
            </select>
         </div>
      </div>                       
 </div>

<div class="div-align-buttons">
   <input type="submit" name="submit" value="Update"/> 
</div>
</form>     
