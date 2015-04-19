<script>
function edit(id){
$('#edit_lembaga').load('<?php echo base_url();?>data/lembaga/view_edit/'+id);
}
</script>
					<script>
					/*$(document).ready(function(){
					$('#pusat_e').click(function(){
					$('#kabupaten_ed').hide();
					$('#kelurahan_ed').hide();
					});
					
					$('#dinas_e').click(function(){
					$('#kabupaten_ed').show();
					$('#kelurahan_ed').hide();
					});
					
					$('#puskesmas_e').click(function(){
					$('#kabupaten_ed').hide();
					$('#kelurahan_ed').show();
					});
					});*/
					</script>
<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Lembaga</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<a data-toggle="modal" href="#myModal" class="btn btn-primary"> New Data </a><br><hr>
					<table id="example1" class="table table-bordered table-striped">
	                	<thead>
	                        <tr> 
	                        	<th>No</th>
                                <th>Kode</th>
                                <th>Lembaga</th>
	                            <th width="120">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
							<?php $no = 1; foreach($lembaga as $row){?>
	                        <tr>
	                        	<td><?php echo $no;?></td>
	                        	<td><?php echo $row->kode_lembaga;?></td>
	                        	<td><?php echo $row->lembaga;?></td>
	                        	<td class="td-actions">
									<a onclick="edit(<?php echo $row->id_lembaga;?>)" class="btn btn-primary btn-small" href="#editModal" data-toggle="modal"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="<?php echo base_url();?>data/lembaga/del_lembaga/<?php echo $row->id_lembaga;?>"><i class="btn-icon-only icon-remove"> </i></a>
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
                <h4 class="modal-title">Tambah Data Lembaga</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url();?>data/lembaga/save_lembaga" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="margin-left: -60px;">  
					<div class="control-group" id="">
                        <label class="control-label">Kode Lembaga</label>
                        <div class="controls">
                            <input type="text" class="span4" name="kode" placeholder="Input Kode" class="form-control" value="" required/>
                        </div>
                    </div>				
                    <div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <input type="text" class="span4" name="lembaga" placeholder="Input Lembaga" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Telepon</label>
                        <div class="controls">
                            <input type="text" class="span4" name="telepon" placeholder="Input Telepon" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <textarea class="span4" name="lembaga" placeholder="Input Alamat Lembaga" class="form-control" required></textarea>
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
        <div class="modal-content" id="edit_lembaga">

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->