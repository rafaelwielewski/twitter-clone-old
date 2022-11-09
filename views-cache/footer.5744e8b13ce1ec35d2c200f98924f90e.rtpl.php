<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="border border-dark col-2 d-flex flex-column flex-shrink-0 p-4">
    <div class="col-12">
    <span> Search Twitter</span>
  <br>
  <br>
  <br>
    </div>
    <div class="text-white fs-3 fw-normal">
      <div class="row g-0 border border-dark">
        <span> Who to follow</span>
        <?php $counter1=-1;  if( isset($user) && ( is_array($user) || $user instanceof Traversable ) && sizeof($user) ) foreach( $user as $key1 => $value1 ){ $counter1++; ?>
        <div class="col-md-4">
          <img class="img-responsive" height="75" width="75" id="image-preview" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
        </div>
        <div class="col-md-8 text-dark">
          <h2><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
          <h4>@<?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
        </div>
        <?php } ?>
        <div class="col-12 text-dark">
            <a href="/connect_people" class="btn btn-primary" >Show more</a>
          </div>
      </div>
      
      <br>
      <br>
      <br>
  
    </div>
  </div>
  
  <div class="col-2 d-flex flex-column flex-shrink-0 p-2">
  
  </div> 
  
  </div>
  
</body>
</html>