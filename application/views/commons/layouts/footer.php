		</div><!-- /#container -->
		<footer class="row">
			<h6>Copyright &copy; 2014 Simplifie. All Rights Reserved.</h6>
		</footer>
    <script src="<?php echo base_url('public/libs/foundation-5.4.7/js/foundation.min.js'); ?>"></script>
    <script>
      $(document).foundation();
      $(document).ready(function(){
        var t = new Traverse()
        t.init();
        t.baseUrl = '<?php echo base_url(); ?>';
      });
    </script>
	</body>
</html>