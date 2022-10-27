<?php 
require_once('../admin/config/connect.php');

$countryphonecodequery=$db->prepare('SELECT * FROM countries where country_id=:cid');
$countryphonecodequery->execute(array('cid'=> $_POST['country_id']));
$showcountryphonecode=$countryphonecodequery->fetch(PDO::FETCH_ASSOC);
?>
 <input style="width: 60px" class="form-control" disabled="" value="<?php echo '+'.$showcountryphonecode['country_phonecode']; ?>">