<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Jabatan</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<a data-toggle="modal" href="#myModal" class="btn btn-primary"> New Data </a><br><hr>
					<table id="example1" class="table table-bordered table-striped">
	                	<thead>
	                        <tr> 
	                        	<th>No</th>
	                            <th>Jabatan</th>
	                            <th>Lembaga</th>
	                            <th width="80">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
							<?php $no = 1; foreach($jabatan as $row){?>
	                        <tr>
	                        	<td><?php echo $no;?></td>
	                        	<td><?php echo $row->jabatan;?></td>
	                        	<td><?php echo $row->kode_lembaga;?></td>
	                        	<td class="td-actions">
									<!--a class="btn btn-small btn-success" href="#"><i class="btn-icon-only icon-ok"> </i></a-->
									<a class="btn btn-primary btn-small" href="<?php echo base_url();?>data/jabatan/edit/<?php echo $row->id_jabatan; ?>"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="<?php echo base_url();?>data/jabatan/del_jabatan/<?php echo $row->id_jabatan;?>"><i class="btn-icon-only icon-remove"> </i></a>
								</td>
	                        </tr>
							<?php $no++;} ?>
	                      
	                    </tbody>
	               	</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">FORM DATA</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url();?>data/jabatan/save_jabatan" method="post">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">Jabatan</label>
                        <div class="controls">
                            <input type="text" class="span4" name="jabatan" placeholder="Input Jabatan" class="form-control" value="" required/>
                        </div>
                    </div>
					<div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <select name="lembaga">
							<option> -- </option>
							<?php foreach($lembaga as $row){?>
							<option value="<?php echo $row->id_lembaga;?>"><?php echo $row->kode_lembaga;?></option>
							<?php } ?>
							</select>
                        </div>
                    </div>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save changes"/>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->