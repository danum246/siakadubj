<div class="row">
  <div class="span12">
    <div class="widget">
      <div class="widget-header">
        <i class="icon-star"></i>
        <h3>FORM EDIT</h3>
      </div> <!-- /widget-header -->
      <div class="widget-content">
        <b><center>Edit Menu</center></b><br>
        <form id="edit-profile" class="form-horizontal" method="post" action="<?php echo base_url(); ?>setting/menu/update/<?php echo $detail->id_menu; ?>">
          <fieldset>
            <div class="control-group">                     
              <label class="control-label">Menu</label>
              <div class="controls">
                <input type="text" class="span3" name="menu" value="<?php echo $detail->menu;?>"/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">URL</label>
              <div class="controls">
                <input type="text" class="span3" name="url" value="<?php echo $detail->url;?>"/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">Icon</label>
              <div class="controls">
                <input type="text" class="span3" name="icon" value="<?php echo $detail->icon;?>"/>
                <a href="<?php echo base_url();?>setting/menu/list_icon" target="blank">List Icon</a>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">Parent</label>
              <div class="controls">
              	<?php $parent_menu = $this->app_model->getdetail('tbl_menu','id_menu',$detail->parent_menu,'id_menu','asc')->row(); ?>
                <input type="text" class="span3" value="<?php echo $parent_menu->menu;?>" disabled/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">Parent Menu</label>
              <div class="controls">
                <select name="parent" class="span3" required>
                	<option value="0">Parent</option>
                	<?php foreach ($menu->result() as $row) {
                		echo "<option value='".$row->id_menu."'> ".$row->menu." </option>";
                	} ?>
                </select>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="form-actions" style="margin-bottom: -30px;">
              <input type="submit" class="btn btn-primary" value="Update"/> 
              <input type="reset" class="btn btn-warning" value="Cancel"/>
            </div> <!-- /form-actions -->
          </fieldset>
        </form>
      </div> <!-- /widget-content -->        
    </div> <!-- /widget -->
  </div>
</div>