
<script type="text/javascript">
    $("#region").change(function(){
        var region_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('region-country-ajax') ?>",
            method: 'POST',
            data: {region_id:region_id, _token:token},
            success: function(data) {
                $("select[id='country']").html('');
                $("select[id='country']").html(data.options);
            }
        });
    });
</script>