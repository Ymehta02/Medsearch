<?php
$obj = new mysqli("localhost","root","","medical");
$cid = $_POST["t1"];
$area = $obj->query("select * from area where c_id = '$cid'");


?>

<option value="">--select Area--</option>
<?php
   while ($s = $area->fetch_object())
    {
      ?>
      <option value="<?php echo $s->a_id;?>"><?php echo $s->area_name;?></option>
      <?php
   }
?>