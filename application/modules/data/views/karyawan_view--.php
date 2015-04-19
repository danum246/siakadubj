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
	                        	<th>Phone</th>
	                        	<th>Jabatan</th>
	                            <th>Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                        	<td>1</td>
	                        	<td>201110225043</td>
	                        	<td>Danu Mahendra</td>
	                        	<td>+6287781042439</td>
	                        	<td>SuperAdmin</td>
	                        	<td class="td-actions">
									<a class="btn btn-small btn-success" href="#"><i class="btn-icon-only icon-ok"> </i></a>
									<a class="btn btn-primary btn-small" href="#"><i class="btn-icon-only icon-pencil"> </i></a>
									<a class="btn btn-danger btn-small" href="#"><i class="btn-icon-only icon-remove"> </i></a>
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
                <h4 class="modal-title">FORM DATA</h4>
            </div>
            <form class ='form-horizontal' action="#" method="post">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">NIK</label>
                        <div class="controls">
                            <input type="text" class="span4" name="jabatan" placeholder="Input NIK" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input type="text" class="span4" name="jabatan" placeholder="Input Name" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Gender</label>
                        <div class="controls">
                            <label class="radio inline">
								<input type="radio" name="radiobtns" value="p"/>
								Man
							</label>
							<label class="radio inline">
								<input type="radio" name="radiobtns" value="w"/>
								Woman
							</label>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Phone</label>
                        <div class="controls">
                            +62 ( <input type="text" class="span3" name="jabatan" placeholder="Input Phone" class="form-control" value="" required/> ) 
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="text" class="span4" name="jabatan" placeholder="Input Email" class="form-control" value="" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <textarea class="span4" name="jabatan" placeholder="Input Address" class="form-control" value="" required></textarea>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Position</label>
                        <div class="controls">
                            <select class="span4" name="jabatan" class="form-control" value="" required>
                            	<option> -- Choose -- </option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <label class="radio inline">
								<input type="radio" name="radiobtns" value="1"/>
								Active
							</label>
							<label class="radio inline">
								<input type="radio" name="radiobtns" value="0"/>
								Not
							</label>
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