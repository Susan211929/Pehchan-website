<html>
<head>
<?php require '../html/header.php' ?>

<script type="text/javascript">
$(document).ready(function(){
$('.materialboxed').materialbox();
});
</script>
</head>
<body>

<?php

  $dir = glob('gallery1/{*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
<div class="row">
<div class="col s10 offset-s1">
  <div class="row">
<?php
  foreach ($dir as $value) {
    ?>
    <div class="col s2 materialboxed" >
      <!-- <a href="<?php echo $value;?>" class="lightBox"> -->
        <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" style="height:200px; width:153px; padding:5px 5px 5px 5px;" >
      <!-- </a> -->

    </div>


    <?php
  }
  ?>
</div>
</div>
</div>
</body>
</html>
