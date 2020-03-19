<?php 
$id = $_GET['id'];
$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

?>
   <div class="empty-view"></div>
<div class="header-top"><h1>Product Profile</h1></div>

<div class="empty-small"></div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div>
    <h2>Name:</h2> <?php echo $list['name'];?>
</div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div>
    <h2>Price:</h2> <?php echo "P".$list['price'];?>
</div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div>
    <h2>Description:</h2> <?php echo $list['description'];?>
</div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div class="empty-small"></div>
<div>
    <h2>Category:</h2> <?php echo $list['category_name'];?>
</div><br><br>
<div class="empty-view"></div>

<div class="empty-view"></div>


<div class="div-align-buttons">
   <a href="index.php?module=editProd&id=<?php echo $list['id'];?>""><div class="button-custom">EDIT</div></a><br>
   <a href="index.php?module=deleteProd&id=<?php echo $list['id'];?>""><div class="button-custom" style="background-color: red !important;">DELETE</div></a>
</div>
