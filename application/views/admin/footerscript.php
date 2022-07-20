<script src="<?php echo base_url(); ?>admin-assert/js/jquery.min.js"></script>
<!--<script src="<?php echo base_url(); ?>assert/../js/bootstrap.js" type="text/javascript"></script>-->
<script src="<?php echo base_url(); ?>admin-assert/js/materialize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin-assert/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin-assert/DataTables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>admin-assert/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assert/js/set.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $('#all').click(function () {
        $("input[type=checkbox]").prop('checked', $(this).prop('checked'));

    });

    $("#input[type=checkbox]").click(function () {
        if (!$(this).prop("checked")) {
            $('#all').prop("checked", false);
        }
    });


</script>