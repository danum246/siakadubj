<script>
					$(document).ready(function(){
					$.post('<?php echo base_url();?>data/karyawan/get_listjab/'+$(this).val(),{},function(get){
					$('#jabatans').html(get);

					});
					});
					</script>
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Data Karyawan</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url();?>data/karyawan/update_karyawan" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">NIK</label>
                        <div class="controls">
							<input type="hidden" name="id_karyawan" value="<?php echo $row->id_kary;?>">
                            <input type="text" class="span4" name="nik" placeholder="Input NIK" class="form-control" value="<?php echo $row->nik;?>" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Nama</label>
                        <div class="controls">
                            <input type="text" class="span4" name="nama" placeholder="Input Nama" class="form-control" value="<?php echo $row->nama;?>" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Jenis Kelamin</label>
                        <div class="controls">
                            <label class="radio inline">
                                <input type="radio" name="jk" value="P" <?php if($row->jns_kel=='P'){ echo 'checked'; } ?>/>
                                Pria
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="jk" value="W" <?php if($row->jns_kel=='W'){ echo 'checked'; } ?>/>
                                Wanita
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Telepon</label>
                        <div class="controls">
                            +62 ( <input type="text" class="span3" name="telepon" id="telepon_e" placeholder="Input Telepon" class="form-control" value="<?php $dat = explode('+62',$row->hp); echo $dat[1]; ?>" required/> ) 
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="text" class="span4" name="email" placeholder="Input Email" class="form-control" value="<?php echo $row->email;?>" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <textarea class="span4" name="alamat" placeholder="Input Alamat" class="form-control" value="" required><?php echo $row->alamat;?></textarea>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Foto</label>
                        <div class="controls">
                            <input type="file" class="span4" name="foto" class="form-control"/>
                        </div>
                    </div>
					<script>
					$(document).ready(function(){
					$('#lembagas').change(function(){

					$.post('<?php echo base_url();?>data/karyawan/get_listjab/'+$(this).val(),{},function(get){
					$('#jabatans').html(get);
					});
					});
					});
					</script>
					</script>
					<div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <select class="span4" name="lembaga" id="lembagas" class="form-control" required>
                                <option> -- </option>
								<?php foreach($lembaga as $rows){?>
								<option value="<?php echo $rows->id_lembaga;?>" <?php if($row->id_lembaga==$rows->id_lembaga){ echo 'selected'; }?> ><?php echo $rows->kode_lembaga;?></option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Jabatan</label>
                        <div class="controls">
                            <select class="span4" name="jabatan" id="jabatans" class="form-control" value="" required>
                               
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <label class="radio inline">
								<input type="radio" name="status" value="1" <?php if ($row->status==1){ echo 'checked'; };?> />
								Aktif
							</label>
							<label class="radio inline">
								<input type="radio" name="status" value="0" <?php if ($row->status==0){ echo 'checked'; };?> />
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