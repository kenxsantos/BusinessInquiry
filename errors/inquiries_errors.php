<?php if(count($inquiries_errors) > 0) : ?>
<div class="error" style="color: red; font-size: 12px;">
    <?php foreach($inquiries_errors as $error) : ?>
    <p><?php echo $error ?></p>
    <?php endforeach ?>
</div>
<?php endif ?>