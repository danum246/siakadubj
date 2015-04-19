<script type="text/javascript">

function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        document.getElementById('save').disabled = false;
        message.innerHTML = "Passwords Match!"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        document.getElementById('save').disabled = true;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

</script>

<?php $user = $this->session->userdata('sess_login'); ?>

<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Ubah Password</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<b><center>Ubah Password Akun</center></b><br>
					<form id="edit-profile" class="form-horizontal" method="post" action="<?php echo base_url(); ?>account/changepass">
						<fieldset>
							<div class="control-group">											
								<label class="control-label">Password Lama: </label>
								<div class="controls">
									<input type="password" class="span3" name="old" placeholder="Lama" required>
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label class="control-label">Password Baru: </label>
								<div class="controls">
									<input type="password" class="span3" name="new" placeholder="Baru" id="pass1" required>
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label class="control-label">Ulangi *: </label>
								<div class="controls">
									<input type="password" class="span3" placeholder="Ketik Ulang" id="pass2" onkeyup="checkPass(); return false;" required>
									<span id="confirmMessage" class="confirmMessage"></span>
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="form-actions">
								<input type="submit" class="btn btn-primary" id="save" value="Ubah Data"/> 
								<input type="reset" class="btn btn-warning" value="Reset"/>
							</div> <!-- /form-actions -->
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>