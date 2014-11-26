<div id="organization" class="create row">
  <h5>New Organization</h5>
    <?php 
      echo validation_errors();
      echo form_open('organization/create'); 
    ?>          
    <div class="row">
        <div class="large-12 columns">
          <input type="text" name="name" placeholder="Name*" />      
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <textarea name="description" placeholder="Description" /></textarea>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <input type="text" name="address" placeholder="Address*" />      
        </div>
       </div>
      <div class="row">
        <div class="large-4 columns">
          <input type="text" name="landline" placeholder="Landline*" />      
        </div>
        <div class="large-4 columns">
          <input type="text" name="mobile" placeholder="Mobile" />                
        </div>
        <div class="large-4 columns">
          <input type="text" name="fax" placeholder="Fax*" />     
        </div>
      <div class="row">
        <div class="large-12 columns">
           <a href="<?php echo site_url('organization'); ?>" class="button radius tiny alert">Cancel</a>
          <button class="button radius tiny">Create</button>
        </div>
      </div>
  </form>
</div>