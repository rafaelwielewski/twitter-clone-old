<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-0 p-4 bg-dark">
  <span class="border border-light"></span>


  <form action="/tweet" method="post">
    <div class="form-floating">
    <textarea class="form-control bg-black text-white fs-3 fw-normal" style="height: 100px" class="form-control" id="tweet" name="tweet" value="tweet" placeholder="What's happening" required></textarea>
    <button type="submit" class="btn btn-primary" name="enviar" id="enviar" value="enviar">Tweet</button>
  </div>
  </form>
  
  <div class="text-white fs-3 fw-normal bg-dark">
  <?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["destweet"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <div class="border border-light"><h2><?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2></div>
  <br>
  <?php } ?>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="container">
       <div class="col-md-4">
          <div class="panel panel-danger">
             <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-twitter-square" aria-hidden="true"></i>
                   Solodev Live
                </h3>
             </div>
             <div class="panel-body">
              adsjkhasdklasdjkl
              sdfkljsdfjklsdjkl
                <a class="twitter-timeline" data-width="100%" href="">Tweets by solodev</a> 
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-4">
    </div>
 </div>
 <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>





<div class="col-2 d-flex flex-column flex-shrink-0 p-4">
  <span class="border border-light"> Search Twitter</span>
</div>
</div>

<div class="col-md-2 d-md-block">

</div> 

</div>

</body>
</html>
