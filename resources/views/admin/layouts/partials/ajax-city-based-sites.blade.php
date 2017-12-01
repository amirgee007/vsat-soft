<script type="text/javascript">
    $("#city").change(function(){
        var city_id = $(this).val();
        var country_id = $('#country :selected').val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('cities-sites-ajax') ?>",
            method: 'POST',
            data:{
                    country_id:country_id,
                    city_id:city_id,
                    _token:token
            },
            success: function(data) {
                $("#sites-table").html(data.sites);
                $("#total-sties").html(data.total_sites);
            }
        });
    });
</script>