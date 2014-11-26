<div id="analytics" class="index row">
  <div>
    <h5>
      Find out when and why
      your place is being visited.
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