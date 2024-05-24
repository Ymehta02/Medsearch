<?php
$obj = new mysqli("localhost","root","","medical");
/*$cid = $_POST["t1"];*/
$show = $obj->query("select * from showroom where area_id='$cid'");

?>

<option value="">--Select Show Room--</option>
<?php
   while ($s1 = $show->fetch_object())
    {
      ?>
      <option value="<?php echo $s1->shop_id;?>"><?php echo $s1->name;?></option>
      <?php
   }
?>