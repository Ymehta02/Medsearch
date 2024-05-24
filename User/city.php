<?php
$obj = new mysqli("localhost","root","","medical");
$cid = $_POST["t"];
$city = $obj->query("select * from city where s_id = '$cid'");


?>

<option value="">--Select City--</option>
<?php
   while ($s = $city->fetch_object())
    {
      ?>
      <option value="<?php echo $s->c_id;?>"><?php echo $s->city;?></option>
      <?php
   }
?>