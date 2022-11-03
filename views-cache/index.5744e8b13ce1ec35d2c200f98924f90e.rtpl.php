<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-0 p-4 bg-dark">
  <span class="border border-light"></span>


  <form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post">
    <div class="form-floating">
    <textarea class="form-control bg-black text-white fs-3 fw-normal" style="height: 100px" class="form-control" id="tweet" name="tweet" value="tweet" placeholder="What's happening" required></textarea>
    <button type="submit" class="btn btn-primary" name="enviar" id="enviar" value="enviar" action="/register" class="register" method="post">Tweet</button>
  </div>
  </form>
  
  
  <div class="text-white fs-3 fw-normal bg-dark">
  <?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["tweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>     
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <?php } ?>
  </div>



</div>





<div class="col-2 d-flex flex-column flex-shrink-0 p-4">
  <span class="border border-light"> Search Twitter</span>
</div>
</div>

<div class="col-md-2 d-md-block">

</div> 

</main>

</body>
</html>
