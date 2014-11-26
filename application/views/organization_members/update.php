<div id="organizationMember" class="update row">
  <h4>Update Member</h4>
    <?php 
      echo validation_errors();
      echo form_open('organizationmember/update'); 
      $o = $organizationMember;
      //print_r($o); exit;
    ?>          
      <input type="hidden" name="id" value="<?php echo $o->organization_member_id; ?>" />
      
      <div class="row">
        <div class="large-3 columns">
          <h5>Organization Name:</h5>
        </div>
        <div class="large-9 columns">
          <?php echo $o->organization_name; ?>
        </div>
      </div>
          
      <?php echo $this->load->view('commons/partials/users/update', array('user' => $o), true) ; ?>
      
      <div class="row">
        <div class="large-3 columns">
          <a href="<?php echo site_url('organization'); ?>" class="button radius small tiny alert">Cancel</a>
          <button class="button radius tiny">Update</button>
        </div>
      </div>
  </form>
</div>