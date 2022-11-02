<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="col-4 d-flex flex-column flex-shrink-0 p-4 bg-dark">
  <span class="border border-light"></span>


  <form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post">
    <div class="form-floating">
    <textarea class="form-control bg-black text-white fs-3 fw-normal" style="height: 100px" class="form-control" id="tweet" name="tweet" value="tweet" placeholder="What's happening" required></textarea>
    <button type="submit" class="btn btn-primary" name="enviar" id="enviar" value="enviar">Tweet</button>
  </div>
  </form>





</div>





<div class="col-2 d-flex flex-column flex-shrink-0 p-4">
  <span class="border border-light"> Search Twitter</span>
</div>
</div>

<div class="col-md-2 d-md-block">

</div> 

</main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
</body>
</html>
