<div id="organizationMember" class="create row">
  <h4>New Member</h4>
    <?php 
      echo validation_errors();
      echo form_open('organizationmember/create'); 
      $o = $organization;
    ?>          
      <input type="hidden" name="organization_id" value="<?php echo $o->id; ?>" />      
      
      <div class="row">
        <div class="large-3 columns">
          <h5>Organization Name:</h5>
        </div>
        <div class="large-9 columns">
          <?php echo $o->name; ?>
        </div>
      </div>
          
      <?php echo $this->load->view('commons/partials/users/create', null, true) ; ?>
      
      <div class="row">
        <div class="large-3 columns">
          <a href="<?php echo site_url('organization'); ?>" class="button radius small tiny alert">Cancel</a>
          <button class="button radius tiny">Create</button>
        </div>
      </div>
  </form>
</div>