<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-4 p-4">
  <form role="form" action="/profile/update/<?php echo getUserName(); ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="form-group">
        <label for="desname">Nome</label>
        <input type="text" class="form-control" id="desname" name="desname" placeholder="Digite o seu nome">
      </div>
      <div class="form-group">
        <label for="file">Foto</label>
        <input type="file" class="form-control" id="file" name="file" >
        <div class="box box-widget">
          <div class="box-body">
            <img class="img-responsive" id="image-preview" src="<?php echo htmlspecialchars( $user["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
    </div>
    <!-- /.box-body -->
  </form>
</div>


<div class="border border-dark col-2 d-flex flex-column flex-shrink-0 p-4">
  <span class=""> Search Twitter</span>
  <span class=""> Search Twitter</span>
  <span class=""> Search Twitter</span>
  <span class=""> Search Twitter</span>
  <span class=""> Search Twitter</span>
  <span class=""> Search Twitter</span>

</div>

<div class="col-2 d-flex flex-column flex-shrink-0 p-2">

</div> 

</div>

</body>
</html>
