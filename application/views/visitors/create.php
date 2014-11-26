<div id="visitor" class="create row">
  <h4>Add Visitor</h4>
    <?php 
      echo validation_errors();
      echo form_open('visitor/create'); 
    ?>    
    <input type="hidden" name="showFormView" value="true" />
    <?php 
      if(@$success){ 
    ?>
      <div data-alert class="alert-box success radius">
        Visitor successfully added.
      </div>
    <?php 
      } 
      else if(@!$success)
      { 
    ?>
      <div data-alert class="alert-box alert radius">
          Adding new visitor failed. Please try again.
        </div>
    <?php 
      }
        if(@$success)
        {
    ?>
      <script>
        $(document).ready(function(){
          $('.alert-box').slideToggle().delay(5000).slideToggle();
        });
      </script>
    <?php 
        }
    ?>
    <div class="row">
      <div class="large-1 columns">Organization</div>
      <div class="large-11 columns">
        <?php 
            $aOrgs = array();
            foreach($organizations as $a)
            {
              $s = $a->name;
              $aOrgs[$s] = $s;
            }
            echo form_dropdown('organization', $aOrgs); 
          ?>
      </div>
    </div>
    <div class="row">
      <div class="large-6 columns">
         <input type="text" name="full_name" placeholder="Full name*" />
      </div>
      <div class="large-6 columns">
        <input type="text" name="person_to_visit" placeholder="Person to visit*"/>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <textarea name="purpose" placeholder="Purpose*"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="large-6 columns">
        <input type="text" name="company" placeholder="Company*" />
      </div>
      <div class="large-3 columns">
        <input type="text" name="date_time_in" class="datetimepicker" placeholder="Date/Time In*" />
      </div>
      <div class="large-3 columns">
        <input type="text" name="date_time_out" class="datetimepicker" placeholder="Date/Time Out*"/>
      </div>
    </div>
    
    <button class="button radius tiny">Add</button>
  </form>
</div>