<div id="visitor" class="index row">
  <div class="row">
    <div class="large-6 columns">
  <br /><br />
  <h5>Visitors</h5>
  <br /><br />
  </div>
  </div>
  
  <div data-alert class="alert-box success radius">
    Visitor successfully added.
  </div>
  
  <div data-alert class="alert-box alert radius">
    Oops there was an error. Please try again.
  </div>
  
  <div class="row">
    <div class="large-3 medium-3 small-12 columns ">
      <div class="radius button btnShowVisitor">
        Add Visitor Panel
      </div>
    </div>
  </div>

  <div class="panel addVisitor">
    <form>
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
    <div class="row">
      <div class="large-12 columns">
        <button class="btnAddVisitor radius tiny">Add Visitor</button>
      </div>
    </div>
    </form>
  </div>
  
  
  <div class="row">
    <div class="large-12 columns ">
      <div class="showRecords">
        <form>
          <div class="row">
          <button class="tiny radius btnShowRecords">Filter Records</button>
          <input type="text" name="date_time_in" class="timeIn datetimepicker" placeholder="Date/Time In*" />
          <input type="text" name="date_time_out" class="timeOut datetimepicker" placeholder="Date/Time Out*" />
          <?php echo form_dropdown('organization', $aOrgs); ?>
        </form>
      </div>
    </div>
  </div>
  
  <div class="row">
  <div class="large-12 columns">
      <table class="dataTable">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Purpose</th>
            <th>Person To Visit</th>
            <th>Company</th>
            <th>Date/Time In</th>
            <th>Date/Time Out</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($visitors as $v){ ?>      
          <tr>
              <td><?php echo $v->full_name; ?></td>
              <td><?php echo $v->purpose; ?></td>
              <td><?php echo $v->person_to_visit; ?></td>
              <td><?php echo $v->company; ?></td>
              <td><?php echo $v->date_time_in; ?></td>
              <td><?php echo $v->date_time_out; ?></td>
          <?php } ?>      
        </tbody>
      </table>
    </div>
  </div>
</div>