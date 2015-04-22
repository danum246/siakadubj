<div class="row">
	<div class="span12">      		  		
  		<div class="widget ">
  			<div class="widget-header">
  				<i class="icon-user"></i>
  				<h3>Data Mata Kuliah</h3>
			</div> <!-- /widget-header -->
			
			<div class="widget-content">
				<div class="span11">
					<form class="form-horizontal" action="<?php echo site_url(); ?>akademik/mk/view_mk">
                        <fieldset>
                            <div class="control-group">                                         
                                <label class="control-label" for="">Fakultas</label>
                                <div class="controls">
                                    <select name="" class="span6" required>
                                        <option> -- Pilih Fakultas -- </option>
                                        <option> Teknik </option>
                                        <option> Hukum </option>
                                        <option> Psikologi </option>
                                        <option> Ilmu Komunikasi </option>
                                        <option> Ekonomi </option>
                                    </select>
                                </div> <!-- /controls -->               
                            </div> <!-- /control-group -->
                            <div class="control-group">                                         
                                <label class="control-label" for="">Jurusan</label>
                                <div class="controls">
                                    <select name="" class="span6" required>
                                        <option> -- Pilih Jurusan -- </option>
                                        <option> T.Informatika </option>
                                        <option> T.Kimia </option>
                                        <option> T.Industri </option>
                                        <option> T.Perminyakan </option>
                                    </select>
                                </div> <!-- /controls -->               
                            </div> <!-- /control-group -->
                                <div class="control-group">                                         
                                <label class="control-label" for="">Peminatan</label>
                                <div class="controls">
                                    <select name="" class="span6" required>
                                        <option> -- Pilih Peminatan -- </option>
                                        <option> Jaringan </option>
                                        <option> Perangkat Lunak </option>
                                    </select>
                                </div> <!-- /controls -->               
                            </div> <!-- /control-group -->
                            
                            <br />
                              
                            <div class="form-actions">
                                <input type="submit" class="btn btn-large btn-success" value="Cari"/> 
                            </div> <!-- /form-actions -->
                        </fieldset>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>