<script>
function edit(id){
$('#edit_tahun_ajar').load('<?php echo base_url();?>master/tahunajaran/view_edit/'+id);
}
</script>
<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Mata Kuliah</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
                    <a href="<?php echo site_url(); ?>akademik/mk" class="btn btn-warning"> << Kembali </a><br><hr>
					<table id="example1" class="table table-bordered table-striped">
	                	<thead>
	                        <tr> 
	                        	<th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
	                            <th width="120">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                        	<td>1</td>
                                <td>KB102204</td>
                                <td>Sekuriti Industri</td>
                                <td>3</td>
	                        	<td class="td-actions">
									<a onclick="edit(<?php echo '1';?>)" class="btn btn-primary btn-small" href="#editModal" data-toggle="modal"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="#"><i class="btn-icon-only icon-remove"> </i></a>
								</td>
	                        </tr>
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
                <h4 class="modal-title">Tambah Tahun Ajaran</h4>
            </div>
            <form class ='form-horizontal' action="#" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="margin-left: -60px;">  
					<div class="control-group" id="">
                        <label class="control-label">Tahun Ajar</label>
                        <div class="controls">
                            <input type="text" class="span4" name="" placeholder="Input Tahun Ajar" class="form-control" value="" required/>
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="edit_tahun_ajar">

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->