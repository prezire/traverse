<div id="tour" class="index row">
  <h5>What is Traverse?</h5>
  Traverse is an online log sheet, designed to be effective
  in organizing and tracking your visitors.
  
  <hr />
  
  <h5>Are my records safe and secure?</h5>
  Yes. Your data is backed-up from time to time. 
  Security is just as secure as any other secured websites.
  
  <hr />
  
  <div id="analytics" class="index row">
    <div>
      <h5>
        Find out when and why
        your place is being visited through Analytics.
      </h5>
      
      <div>
        Too many people to accomodate
        on Fridays while too few on Mondays? 
        Analyze your visitors' needs
        to serve them better.
        <br /><br />
        Choose from different sets of graphs 
        to compare old and recent records.
        <br /><br />
        Select different labels from visiting person, 
        person visited, time, purpose and company.
      </div>
    </div>
    <br /><br />
    <div class="row">
      <div class="large-12 columns">
        <div class="ct-chart ct-perfect-fourth"></div>
      </div>
    </div>
      <link rel="stylesheet" href="<?php echo base_url('public/libs/chartist-js-master/libdist/chartist.min.css'); ?>" />
      <script src="<?php echo base_url('public/libs/chartist-js-master/libdist/chartist.min.js'); ?>"></script>
    <script>
      $(document).ready(function()
      {
         new Chartist.Line('.ct-chart', {
          labels: [1, 2, 3, 4, 5, 6, 7, 8],
          series: [
            [1, 2, 3, 1, -2, 0, 1, 0],
            [-2, -1, -2, -1, -2.5, -1, -2, -1],
            [0, 0, 0, 1, 2, 2.5, 2, 1],
            [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
          ]
        }, {
          high: 3,
          low: -3,
          showArea: true,
          showLine: false,
          showPoint: false,
          axisX: {
            showLabel: false,
            showGrid: false
          }
        });
      });
    </script>
  </div>
  
  <br />
  <hr />
  <br />
  
  <div class="flex-video">
    <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
  </div>
</div>