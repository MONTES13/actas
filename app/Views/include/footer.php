  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="text-center">
    <strong>Copyright &copy; <?php echo date('Y')?></strong>

    </div>
  </footer>


</div>


<?php
    if( isset( $lib_js ) ){
        foreach( $lib_js as $value ){
            echo $value;
        }
    }
	if( isset( $lib_php ) ){
        foreach( $lib_php as $value ){
			$this->load->view( $value );
        }
    }

    if( isset( $debug ) && $debug === true ){
        if( $debug ){
        	$this->output->enable_profiler( TRUE );
        }
    }
	?>
</body>
</html>
<!-- ./wrapper --> 