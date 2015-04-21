<script>
function edit(id){
$('#editrole').load('<?php echo base_url();?>setting/role/getdataedit/'+id);
}
</script>

<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Role Access</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<!--a data-toggle="modal" href="#myModal" class="btn btn-primary"> New Data </a><br><hr-->
					<table id="example1" class="table table-bordered table-striped">
	                	<thead>
	                        <tr> 
	                        	<th>No</th>
                                <th>Jabatan</th>
	                        	<th>Lembaga</th>
                                <th width="40">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
                            <?php $no = 1; foreach ($jabatan as $row) { ?>
	                        <tr>
	                        	<td><?php echo $no ;?></td>
                                <td><?php echo $row->jabatan ?></td>
	                        	<td><?php echo $row->kode_lembaga ;?>
								</td>
	                        	<td class="td-actions">
									<a data-toggle="modal" class="btn btn-small btn-success" href="#edit" onclick="edit(<?php echo $row->id_jabatan;?>)"><i class="btn-icon-only icon-ok"> </i></a>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">FORM DATA</h4>
            </div>

            <script language="javascript">
                $(document).ready(function() {
                    $("#lembaga").change(function() {
                        $.post("<?php echo base_url(); ?>setting/role/list_menu/" + $('#lembaga').val(), {}, function(obj) {
                            $('#menu').html(obj);
                        });
                    });
                });
            </script>

            <form class ='form-horizontal' action="<?php echo base_url();?>setting/role/save" method="post">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <select class="span4" name="lembaga" id="lembaga" class="form-control" required>
                            	<option> -- Pilih -- </option>
                                <?php foreach ($lembaga as $row) { ?>
                                    <option value="<?php echo $row->id_lembaga; ?>"> <?php echo $row->kode_lembaga; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Menu</label>
                        <div class="controls">
                            <select class="span4" name="menu" id="menu" class="form-control" required>
                                <option> -- Choose -- </option>
                            </select>
                            <p>* = Parent Menu</p>
                        </div>
                    </div>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" class="btn btn-primary" value="Simpan"/>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="edit" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="editrole">
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->