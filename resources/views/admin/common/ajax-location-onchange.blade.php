<script type="text/javascript">
    $(function () {
        var region = $("#region");
        var country = $("#country");
        var city = $("#city");
        var project = $("#project");
        var search_pro =  $('#search_project');
        region.change(function(){
            var region_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('region-country-ajax') ?>",
                method: 'POST',
                data: {region_id:region_id, _token:token},
                success: function(data) {
                    $("select[id='country']").html(data.options);
                }
            });
        });

        country.change(function(){
            var country_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('country-city-ajax') ?>",
                method: 'POST',
                data: {country_id:country_id, _token:token},
                success: function(data) {
                    $("select[id='city']").html(data.options);
                }
            });
        });
        city.change(function(){
            project.prop('disabled', false);
        });
        search_pro.on('click',function (e) {
            var selected_region = $('#region :selected').val();
            var selected_country = $('#country :selected').val();
            var selected_city = $('#city :selected').val();
            var selected_pro =  $('#project :selected').val();

            if(selected_region )
            {
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "<?php echo route('document.project.ajax') ?>",
                    method: 'POST',
                    data:{
                        region:selected_region,
                        country:selected_country,
                        city:selected_city,
                        project:selected_pro,
                        _token:token
                    },
                    success: function(data) {
                        $("#project-table").html(data.project);
                    }
                });

            } else {
                toastr.success("You must have to select region!!", "Info");
            }
        });
    });

</script>
