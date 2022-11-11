<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-0 p-4 bg-black">
  <form action="/tweet" method="post">
    <div class="form-floating">
    <textarea class="form-control bg-black text-white fs-3 fw-normal" style="height: 100px" class="form-control" id="tweet" name="tweet" value="tweet" placeholder="What's happening" required></textarea>
    <button type="submit" class="btn btn-primary" name="enviar" id="enviar" value="enviar">Tweet</button>
  </div>
  </form>
  <?php $counter1=-1;  if( isset($postsall) && ( is_array($postsall) || $postsall instanceof Traversable ) && sizeof($postsall) ) foreach( $postsall as $key1 => $value1 ){ $counter1++; ?>
  <div class="text-white fs-3 fw-normal border border-dark row g-0">
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
      <img class="img-responsive" height="75" width="75" id="image-preview" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
    </div>
    <div class="col-md-9">
      <label class="text-white"><h3><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></label>
      <label class="text-dark"><h4>@<?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3></label>
      <label class="text-dark"><h5>@<?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5></label><br>
      <label class="text-white"><h3><?php echo htmlspecialchars( $value1["destweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></label>
    </div>
    <div class="col-md-3">
    </div>
    <div class="col-md-3">
        <a href="/tweet/<?php echo htmlspecialchars( $value1["idtweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="nav-link text-white d-flex align-items-center mb-3 mb-md-0 me-md-auto" aria-current="page">
          <svg class="bi pe-none me-2" width="26.25" height="26.25"><use xlink:href="#comments"/></svg>
          <span class="fs-4"><?php echo htmlspecialchars( $value1["desreplies"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
        </a>
    </div>
    <div class="col-md-3">
        <a href="#" class="nav-link text-white d-flex align-items-center mb-3 mb-md-0 me-md-auto" aria-current="page">
          <svg class="bi pe-none me-2" width="26.25" height="26.25"><use xlink:href="#retweet"/></svg>
          <span class="fs-4"></span>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/like/<?php echo htmlspecialchars( $value1["idtweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="nav-link text-white d-flex align-items-center mb-3 mb-md-0 me-md-auto" aria-current="page">
          <svg class="bi pe-none me-2" width="26.25" height="26.25"><use xlink:href="#like"/></svg>
          <span class="fs-4"><?php echo htmlspecialchars( $value1["deslikes"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
        </a>
      </div>
    </div>

  <?php } ?>
  
</div>
