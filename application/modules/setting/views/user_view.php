<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data User</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<a data-toggle="modal" href="#myModal" class="btn btn-primary"> New Data </a><br><hr>
					<table id="example1" class="table table-bordered table-striped">
	                	<thead>
	                        <tr> 
	                        	<th>No</th>
	                        	<th>NIK</th>
	                        	<th>Nama</th>
	                        	<th>Username</th>
	                        	<th>Aktif</th>
	                            <th width="80">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
                            <?php $no = 1; foreach ($user as $row) { ?>
	                        <tr>
	                        	<td><?php echo $no;?></td>
	                        	<td><?php echo $row->nik ?></td>
	                        	<td><?php echo $row->nama ?></td>
	                        	<td><?php echo $row->username ?></td>
	                        	<?php if ($row->status == 1) { ?>
                                    <td>Ya</td>
                                <?php } else { ?>
                                   <td>Not</td>
                                <?php } ?>
	                        	<td class="td-actions">
									<a class="btn btn-primary btn-small" href="<?php echo base_url();?>setting/user/edit/<?php echo $row->id_user; ?>"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="<?php echo base_url();?>setting/user/delete/<?php echo $row->id_user; ?>"><i class="btn-icon-only icon-remove"> </i></a>
								</td>
	                        </tr>
	                        <?php $no++; } ?>
	                    </tbody>
	               	</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        document.getElementById('save').disabled = false;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        document.getElementById('save').disabled = true;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">FORM DATA</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url(); ?>setting/user/save" method="post">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">Username</label>
                        <div class="controls">
                            <input type="text" class="span4" name="username" placeholder="Input Username" class="form-control" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" class="span4" name="password" placeholder="Input Password" class="form-control" id="pass1" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Ulangi*</label>
                        <div class="controls">
                            <input type="password" class="span4" placeholder="Password Ketik Ulang" class="form-control" id="pass2" onkeyup="checkPass(); return false;" required/>
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Karyawan</label>
                        <div class="controls">
                            <select class="span4" name="karyawan" class="form-control" required>
                            	<option> -- Pilih -- </option>
                                <?php foreach ($kary as $row) { if($row->status == 1) { ?>
                                 <option value="<?php echo $row->nik;?>"> <?php echo $row->nama?> </option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <label class="radio inline">
								<input type="radio" name="status" value="1">
								Active
							</label>
							<label class="radio inline">
								<input type="radio" name="status" value="0">
								Not
							</label>
                        </div>
                    </div>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" class="btn btn-primary" id="save" value="Simpan" disabled/>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->