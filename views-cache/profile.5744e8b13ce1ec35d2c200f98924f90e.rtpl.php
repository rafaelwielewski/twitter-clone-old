<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-4 p-4">
  <div class="text-white fs-3 fw-normal">
    <div class="row g-0 border border-light">
      <div class="col-12">
        <h2><?php echo htmlspecialchars( $user["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
      </div>
      <div class="col-12 text-dark">
        <h4>@<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
      </div>
    </div>
    <br>
    <br>
    <br>

  </div>
  <div class="text-white fs-3 fw-normal">
    <?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
    <div class="border border-dark">
    <div class="col-12">
      <label class="text-white"><h2><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></label>
      <label class="text-dark"><h3>@<?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3></label>
      <label class="text-dark"><h5>@<?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5></label>
    </div>
    <div class="col-12">
      <label class="text-white"><h2><?php echo htmlspecialchars( $value1["destweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></label>
    </div>
    </div>
    <?php } ?>
</div>
</div>


<div class="col-2 d-flex flex-column flex-shrink-0 p-4">
  <span class="border border-light"> Search Twitter</span>
</div>

<div class="col-2 d-flex flex-column flex-shrink-0 p-2">

</div> 

</div>

</body>
</html>
