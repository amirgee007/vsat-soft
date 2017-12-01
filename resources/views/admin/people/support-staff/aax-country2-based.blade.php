
<script type="text/javascript">
    $("#country2").change(function(){
        var country_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('country-city-ajax') ?>",
            method: 'POST',
            data: {country_id:country_id, _token:token},
            success: function(data) {
                $("select[id='city2']").html('');
                $("select[id='city2']").html(data.options);
            }
        });
    });
</script>