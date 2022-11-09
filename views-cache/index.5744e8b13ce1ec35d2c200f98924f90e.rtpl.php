<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-0 p-4 bg-black">
  <form action="/tweet" method="post">
    <div class="form-floating">
    <textarea class="form-control bg-black text-white fs-3 fw-normal" style="height: 100px" class="form-control" id="tweet" name="tweet" value="tweet" placeholder="What's happening" required></textarea>
    <button type="submit" class="btn btn-primary" name="enviar" id="enviar" value="enviar">Tweet</button>
  </div>
  </form>
  <div class="text-white fs-3 fw-normal">
  <?php $counter1=-1;  if( isset($postsall) && ( is_array($postsall) || $postsall instanceof Traversable ) && sizeof($postsall) ) foreach( $postsall as $key1 => $value1 ){ $counter1++; ?>
  <div class="col-12 border border-dark">
    <label class="text-white"><h3><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></label>
    <label class="text-dark"><h4>@<?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3></label>
    <label class="text-dark"><h5>@<?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5></label>
  </div>
  <div class="border border-dark">
    <h3><?php echo htmlspecialchars( $value1["destweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
  </div>
  <?php } ?>
  </div>
</div>
