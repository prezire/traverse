<div id="auth" class="register row">
  <h4 class="large-12 columns">Register</h4>
  <?php
   echo validation_errors();
   echo form_open('auth/register'); 
  ?>
    <input type="hidden" name="role" value="Admin" />
    <div class="large-12 columns"><input type="text" name="email" placeholder="Email:*" /></div>
    <div class="large-12 columns"><input type="password" name="password" placeholder="Password:*" /></div>
    <div class="large-3 columns"><button class="small radius tiny">Register</button></div>
    <div class="large-9 columns">
      <a href="<?php echo site_url('main/pricing'); ?>" target="_blank">Pricing Plans</a>
      <?php 
        $plans = array('Small' => 'Small','Medium' => 'Medium', 'Large' => 'Large');
        echo form_dropdown('plan', $plans, $plan); 
      ?>
    </div>
  </form>
</div>