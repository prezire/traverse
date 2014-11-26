<div id="auth" class="login row">
  <h4 class="large-12 columns">Login</h4>
  <?php 
    if(!empty($error))
    {
      if($error)
      {
  ?>
    <div class="row"><div class="large-12 columns">
    <div class="alert-box alert radius">
      Error logging in. Check credentials and try again.
    </div></div></div>
  <?php
      }
    }
  ?>
  <?php
   echo validation_errors();
   echo form_open('auth/login'); 
  ?>
    <div class="large-2 columns">Email: *</div><div class="large-10 columns"><input type="text" name="email" /></div>
    <div class="large-2 columns">Password: *</div><div class="large-10 columns"><input type="password" name="password" /></div>
    <div class="large-10 columns"><button class="small radius">Login</button></div>
  </form>
</div>