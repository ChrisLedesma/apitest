<?php
$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');

$data = json_decode($json,true);
//rsort($data);
$list = $data['records'];
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
<div class="header-top"><h1>Add Product</h1></div>

<div class="contain">
   <form action="addProd_pro.php" method="POST">
      <div class="info-row">
         <div class="info" style="color: #45a29e;"><h2>Name:</h2></div>
         <div class="info"><input type="text" name="name" placeholder="name" required/</div>
      </div>
      <div class="info-row">
         <div class="info" style="color: #45a29e;">
             <h2>Price:</h2>
         </div>
          <div class="info">
             <input type="number" name="price" placeholder="price" required/>
         </div>
      </div>
      <div class="info-col">
         <div class="info" style="margin-bottom: 5vh; color: #45a29e;"">
             <h2 >Description:</h2>
         </div>
          <div class="info">
             <input type="text" name="description" placeholder="description" required/>
         </div>
      </div>
      <div class="info-row">
         <div class="info" style="color: #45a29e;">
             <h2>Category:</h2>
         </div>
          <div class="info">
             <select name="category" required>
                <?php
                    foreach($list as $value){?>
                    <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
               <?php
                }
               ?>
            </select>
         </div>
      </div>                       
 </div>

<div class="div-align-buttons">
   <input type="submit" name="submit" value="submit"/> 
</div>
      </form>                                                                                                                                         

