<script src="<?php echo MY_URL; ?>/GUI/plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/plugins/iCheck/icheck.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/plugins/select2/select2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/plugins/daterangepicker/daterangepicker.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo MY_URL; ?>/GUI/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript" charset="utf-8"></script>

<script>
  $(function () {
    $(".select2").select2();
    $('#dpic-ngsinh').datepicker({
		autoclose: true,
		format: "dd/mm/yyyy"
    });
    $('input[type="checkbox"], input[type="radio"]').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue'
    });
  });
</script>