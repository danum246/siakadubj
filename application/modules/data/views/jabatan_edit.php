<div class="row">
  <div class="span12">
    <div class="widget">
      <div class="widget-header">
        <i class="icon-star"></i>
        <h3>FORM EDIT</h3>
      </div> <!-- /widget-header -->
      <div class="widget-content">
        <b><center>Edit Jabatan</center></b><br>
        <form id="edit-profile" class="form-horizontal" method="post" action="<?php echo base_url(); ?>data/jabatan/update/<?php echo $detail->id_jabatan; ?>">
          <fieldset>
            <div class="control-group">                     
              <label class="control-label">Jabatan</label>
              <div class="controls">
                <input type="text" class="span3" name="jabatan" value="<?php echo $detail->jabatan;?>"/>
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