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
	                        	<th>Menu</th>
	                        	<th>Url</th>
	                        	<th>Icon</th>
	                            <th width="80">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
                            <?php $no = 1; foreach ($menu as $row) { ?>
	                        <tr>
	                        	<td><?php echo $no; ?></td>
	                        	<td><?php echo $row->menu; ?></td>
                                <?php if ($row->url == '-') { ?>
                                    <td>*Dropdown Menu</td>
                                <?php } else { ?>
                                   <td><?php echo $row->url; ?></td>
                                <?php } ?>
	                        	<td><?php echo $row->icon; ?> </td>
	                        	<td class="td-actions">
									<a class="btn btn-primary btn-small" href="<?php echo base_url();?>setting/menu/edit/<?php echo $row->id_menu; ?>"><i class="btn-icon-only icon-pencil"> </i></a>
									<a onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger btn-small" href="<?php echo base_url();?>setting/menu/delete/<?php echo $row->id_menu; ?>"><i class="btn-icon-only icon-remove"> </i></a>
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
            <form class ='form-horizontal' action="<?php echo base_url();?>setting/menu/save" method="post">
                <div class="modal-body" style="margin-left: -60px;">    
                    <div class="control-group" id="">
                        <label class="control-label">Menu</label>
                        <div class="controls">
                            <input type="text" class="span4" name="menu" placeholder="Input Menu" class="form-control" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Url</label>
                        <div class="controls">
                            <input type="text" class="span4" name="url" placeholder="Input URL" class="form-control" required/>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Logo</label>
                        <div class="controls">
                            <input type="text" class="span4" name="icon" placeholder="Icon" class="form-control"/>
                            <a href="<?php echo base_url();?>setting/menu/list_icon" target="blank">List Icon</a>
                        </div>
                    </div>
                    <div class="control-group" id="">
                        <label class="control-label">Menu Utama</label>
                        <div class="controls">
                            <select class="span4" name="parent" class="form-control" required>
                                <option> -- Pilih -- </option>
                                <option value="0"> -- Utama -- </option>
                                 <?php foreach ($menu as $row) { if($row->parent_menu == 0) { ?>
                            	 <option value="<?php echo $row->id_menu;?>"> <?php echo $row->menu?> </option>
                                <?php }} ?>
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