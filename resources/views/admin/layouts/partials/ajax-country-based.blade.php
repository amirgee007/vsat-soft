<script type="text/javascript">
    $("#country").change(function(){
        var country_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('country-city-ajax') ?>",
            method: 'POST',
            data: {country_id:country_id, _token:token},
            success: function(data) {
                $("select[id='city']").html(data.options);
                $("#sites-table").html(data.sites);
                $("#total-sties").html(data.total_sites);
            }
        });
    });
</script>