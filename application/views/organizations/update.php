<div id="organization" class="update row">
  <h4>Update Organization</h4>
    <?php 
      echo validation_errors();
      echo form_open('organization/update'); 
    ?>
      <input type="hidden" name="id" value="<?php echo set_value('id', $organization->id); ?>" />      
          
      <div class="row">
        <div class="large-12 columns">
            Name: <input type="text" name="name" value="<?php echo set_value('name', $organization->name); ?>" />      
          </div>
        </div>
      <div class="row">
        <div class="large-12 columns">
          Description: <input type="text" name="description" value="<?php echo set_value('description', $organization->description); ?>" />      
        </div>
      </div>
  <div class="row">
    <div class="large-12 columns">
        Address: <input type="text" name="address" value="<?php echo set_value('address', $organization->address); ?>" />      
      </div>
   </div>
   <div class="row">
      <div class="large-4 columns">
        Landline: <input type="text" name="landline" value="<?php echo set_value('landline', $organization->landline); ?>" />      
      </div>
      <div class="large-4 columns">
        Mobile: <input type="text" name="mobile" value="<?php echo set_value('mobile', $organization->mobile); ?>" />      
      </div>
      <div class="large-4 columns">
        Fax: <input type="text" name="fax" value="<?php echo set_value('fax', $organization->fax); ?>" />      
      </div>
    </div>
    <hr />
    <?php 
      $a = array('organizationMembers' => $organizationMembers, 'organizationId' => $organization->id);
      echo $this->load->view('organization_members/index', $a, true); 
    ?>
    <hr />
     <div class="row">
        <div class="large-12 columns">
         <a href="<?php echo site_url('organization'); ?>" class="button radius tiny alert">Cancel</a>
        <button class="button radius tiny">Update</button>
        </div>
    </div>
  </form>
</div>