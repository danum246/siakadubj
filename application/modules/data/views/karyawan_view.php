<script>
function edit(idk){
$('#editkary').load('<?php echo base_url();?>data/karyawan/load_edit/'+idk);
}
</script>
<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Karyawan</h3>
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
                                <th>Telepon</th>
                                <th>Lembaga</th>
                                <th>Jabatan</th>
	                            <th width="120">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
							<?php $no = 1; foreach($karyawan as $row){?>
	                        <tr>
	                        	<td><?php echo $no;?></td>
	                        	<td><?php echo $row->nik;?></td>
	                        	<td><?php echo $row->nama;?></td>
	                        	<td><?php echo $row->hp;?></td>
                                <td><?php echo $row->kode_lembaga;?></td>
                                <td><?php echo $row->jabatan;?></td>
	                        	<td class="td-actions">
									<a data-toggle="modal" href="#editModal"class="btn btn-primary btn-small" onclick="edit(<?php echo $row->id_kary;?>)"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="<?php echo base_url();?>data/karyawan/del_karyawan/<?php echo $row->id_kary;?>"><i class="btn-icon-only icon-remove"> </i></a>
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
                <h4 class="modal-title">Tambah Data Karyawan</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url();?>data/karyawan/save_karyawan" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">NIK</label>
                        <div class="controls">
                            <input type="text" class="span4" name="nik" placeholder="Input NIK" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Nama</label>
                        <div class="controls">
                            <input type="text" class="span4" name="nama" placeholder="Input Nama" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Jenis Kelamin</label>
                        <div class="controls">
                            <label class="radio inline">
                                <input type="radio" name="jk" value="P"/>
                                Pria
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="jk" value="W"/>
                                Wanita
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Telepon</label>
                        <div class="controls">
                            +62 ( <input type="text" class="span3" name="telepon" id="telepon" placeholder="Input Telepon" class="form-control" value="" required/> ) 
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="text" class="span4" name="email" placeholder="Input Email" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <textarea class="span4" name="alamat" placeholder="Input Alamat" class="form-control" value="" required></textarea>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Foto</label>
                        <div class="controls">
                            <input type="file" class="span4" name="foto" class="form-control" required/>
                        </div>
                    </div>
					<script>
					$(document).ready(function(){
					$('#lembaga').change(function(){
					$.post('<?php echo base_url();?>data/karyawan/get_listjab/'+$(this).val(),{},function(get){
					$('#jabatan').html(get);
					});
					});
					});
					</script>
					</script>
					<div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <select class="span4" name="lembaga" id="lembaga" class="form-control" value="" required>
                                <option> -- </option>
								<?php foreach($lembaga as $row){?>
								<option value="<?php echo $row->id_lembaga;?>"><?php echo $row->kode_lembaga;?></option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Jabatan</label>
                        <div class="controls">
                            <select class="span4" name="jabatan" id="jabatan" class="form-control" value="" required>
                               
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <label class="radio inline">
								<input type="radio" name="status" value="1"/>
								Aktif
							</label>
							<label class="radio inline">
								<input type="radio" name="status" value="0"/>
								Tidak Aktif
							</label>
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
        <div class="modal-content" id="editkary">
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->