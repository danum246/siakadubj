<div class="row">
  <div class="span12">
    <div class="widget">
      <div class="widget-header">
        <i class="icon-star"></i>
        <h3>FORM EDIT</h3>
      </div> <!-- /widget-header -->
      <div class="widget-content">
        <b><center>Edit User</center></b><br>
        <form id="edit-profile" class="form-horizontal" method="post" action="<?php echo base_url(); ?>setting/user/update/<?php echo $detail->id_user; ?>">
          <fieldset>
            <div class="control-group">                     
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" class="span3" name="username" value="<?php echo $detail->username;?>"/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" class="span3" name="password" value="<?php echo $detail->password_plain;?>"/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group">                     
              <label class="control-label">NIK</label>
              <div class="controls">
                <input type="text" class="span3" name="nik" value="<?php echo $detail->nik;?>"/>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            <div class="control-group" id="">
              <label class="control-label">Status</label>
              <div class="controls">
                  <label class="radio inline">
                  <input type="radio" name="status" value="1">
                  Aktif
                </label>
                <label class="radio inline">
                  <input type="radio" name="status" value="0">
                  Tidak
                </label>
              </div>
            </div>
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