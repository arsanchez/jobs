<div class="container">
  <form class="form-horizontal" id="newJobForm" method="post" action="<?php echo base_url('index.php/jobs/save'); ?>">
  <div class="row">
    <div class="col-md-12">
        <h2><?php echo $this->lang->line('new_job') ?></h2>
    </div>
    <div class="col-md-6">
            <div class="form-group">
              <label class="control-label col-md-2" for="txtCompany"><?php echo $this->lang->line('company') ?> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="txtCompany" name="txtCompany" required>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2" for="txtJobType"><?php echo $this->lang->line('job_type') ?> </label>
              <div class="col-md-6">
                <select class="form-control" id="txtJobType" name="txtJobType" required>
                    <option value=""></option>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Freelance">Freelance</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2" for="txtJobLogo"><?php echo $this->lang->line('job_logo') ?> </label>
              <div class="col-md-6">
                <input type="file" id="txtJobLogo" name="txtJobLogo" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2" for="txtUrl"><?php echo $this->lang->line('url') ?> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="txtUrl" name="txtUrl" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2" for="txtJob"><?php echo $this->lang->line('job_text') ?> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="txtJob" name="txtJob" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2" for="txtUbication"><?php echo $this->lang->line('job_ubication') ?> </label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="txtUbication" name="txtUbication" required>
              </div>
            </div>

            
    </div>
    <div class="col-md-6">
      <div class="form-group">
            <label class="control-label col-md-2" for="txtJobCategory"><?php echo $this->lang->line('job_catgory') ?> </label>
            <div class="col-md-6">
              <select class="form-control" id="txtJobCategory" name="txtJobCategory" required>
                    <option value=""></option>
                    <?php 
                      foreach ($categories as $key => $c) 
                      {
                       echo "<option value = '".$c['id']."'>".$c['name']."</option>";
                      }
                    ?>
                </select>
            </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2" for="txtJobDesc"><?php echo $this->lang->line('job_ubication') ?> </label>
        <div class="col-md-6">
          <textarea class="form-control" id="txtJobDesc" name="txtJobDesc" required> </textarea> 
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2" for="txtJobHowApply"><?php echo $this->lang->line('job_how_apply') ?> </label>
        <div class="col-md-6">
          <textarea class="form-control" id="txtJobHowApply" name="txtJobHowApply" required> </textarea> 
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2" for="txtJobEmail"><?php echo $this->lang->line('job_email') ?> </label>
        <div class="col-md-6">
          <input type="text" class="form-control" id="txtJobEmail" name="txtJobEmail" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2" for="txtJobEmail"><?php echo $this->lang->line('job_is_public');   ?></label>
        <div class="col-md-6">
           <div class="checkbox">
            <label><input type="checkbox" value=""><?php echo $this->lang->line('job_is_public_explain') ?> </label>
          </div>
        </div>
      </div>
         <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"><?php echo $this->lang->line('post_job') ?></button>
          </div>
      </div>
    </div>
  </div>
  </form>
</div>

