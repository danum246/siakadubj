            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Data Lembaga</h4>
            </div>
            <form class ='form-horizontal' action="<?php echo base_url();?>data/lembaga/edit_lembaga" method="post" enctype="multipart/form-data">
                <div class="modal-body" style="margin-left: -60px;">  
					<div class="control-group" id="">
                        <label class="control-label">Kode Lembaga</label>
                        <div class="controls">
                            <input type="text" class="span4" name="kode_edit" id="kode_e" placeholder="Input Kode" class="form-control" value="<?php echo $query->kode_lembaga;?>" required/>
                        </div>
                    </div>				
                    <div class="control-group" id="">
                        <label class="control-label">Lembaga</label>
                        <div class="controls">
                            <input type="text" class="span4" name="lembaga_edit" id="lembaga_e" placeholder="Input Lembaga" class="form-control" value="<?php echo $query->lembaga;?>" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Telepon</label>
                        <div class="controls">
                            <input type="text" class="span4" name="telepon" placeholder="Input Telepon" class="form-control" value="<?php echo $query->telepon;?>" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Alamat</label>
                        <div class="controls">
                            <textarea class="span4" name="lembaga" placeholder="Input Alamat Lembaga" class="form-control" required><?php echo $query->alamat;?></textarea>
                        </div>
                    </div>
                    
                </div> 
                <div class="modal-footer">
				<input type="hidden" name="id_lembaga" id="idl" value="<?php echo $query->id_lembaga;?>">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <input type="submit" class="btn btn-primary" value="Simpan Perubahan"/>
                </div>
            </form>