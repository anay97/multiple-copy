
<form method="post" action="index.php">
  
<select name="site"  onchange="this.form.submit()">
  <option name="site0" >Select Site</option>
  <option value="site1">Site 1</option>
  <option value="site2">Site 2</option>

</select>
</form>

<?php
//error_reporting(0);
session_start();
$site='';
if(!isset($_SESSION['site'])){
  $_SESSION['site']='site1';
  $site='site1';
}
$site=$_POST['site'];
if($site!='' || $site!=null){
  $_SESSION['site']=$site;
}
echo $site;

?>