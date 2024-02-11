<?php if(count($register_errors) > 0) : ?>
    <div class="error" style="color:red;">
        <?php foreach($register_errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>