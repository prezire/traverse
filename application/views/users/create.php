<div id="user" class="create">
    <?php 
      echo validation_errors();
      echo form_open('user/create'); 
    ?>          
      <?php echo $this->load->view('commons/partials/users/create', null, true); ?>
      <a href="<?php echo site_url('user'); ?>">Cancel</a> | 
      <button>Create</button>
  </form>
</div>