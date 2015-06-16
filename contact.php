<?php include_once 'konfiguracija.php'; ?>

 <script>
 $(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "process.php", 
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) 
                $("#form-content").modal('hide'); 
            },
            error: function(){
                alert("failure");
            }
        });
    });
});



</script>


<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3><span class="glyphicon glyphicon-envelope"></span> KONTAKTIRAJTE NAS</h3>
				<hr class="left-contact">
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="form" name="form" method="POST">
  <div class="form-group">
    <label for="ime" class="col-sm-2 control-label">Ime</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime">
    </div>
  </div>
 <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="ivan@example.hr">
    </div>
  </div>


 <div class="form-group">
    <label for="pitanje" class="col-sm-2 control-label">Pitanje</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control-pitanje" id="pitanje" name="pitanje" rows="10"></textarea>
    </div>
  </div>

	
</div> 
<div class="modal-footer">
       <a class="btn btn-warning" data-dismiss="modal">Zatvori</a>
     <input class="btn btn-danger" type="submit" name="submit" id="submit" value="Pošalji" />    
  </div>
  </div>
	</div>
</div>


</form>

