<?php if(count($login_errors) > 0) : ?>
    <div class="error" style="color:red;">
        <?php foreach($login_errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>