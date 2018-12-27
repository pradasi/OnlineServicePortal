<?php 
if(count($errors)>0): ?>
<div class="alert">
    <span class="error" onclick="this.parentElement.style.display='none';">&times;</span> 
<?php foreach($errors as $error): ?>
    <p><?php echo $error ; ?></p>
    <?php endforeach ?>

</div>
<?php endif ?>

<?php if(count($suc)>0): ?>
<div class="alert2">
    <span class="success" onclick="this.parentElement.style.display='none';">&times;</span> 
<?php foreach($suc as $success): ?>
    <p><?php echo $success ; ?></p>
    <?php endforeach ?>

</div>
<?php endif ?>
