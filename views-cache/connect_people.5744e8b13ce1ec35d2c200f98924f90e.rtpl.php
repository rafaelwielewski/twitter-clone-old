<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-4 p-4">
  <div class="text-white fs-3 fw-normal">
    <div class="row g-0 border border-dark">
      <span> Suggested for you</span>
      <?php $counter1=-1;  if( isset($user2) && ( is_array($user2) || $user2 instanceof Traversable ) && sizeof($user2) ) foreach( $user2 as $key1 => $value1 ){ $counter1++; ?>
      <div class="col-md-4">
        <img class="img-responsive" height="75" width="75" id="image-preview" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
      </div>
      <div class="col-md-8 text-dark">
        <h2><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        <h4>@<?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
      </div>
      <?php } ?>
    </div>
</div>
</div>