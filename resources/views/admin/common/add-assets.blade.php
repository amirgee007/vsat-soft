<script type="application/javascript">
    $(function () {

        var uri = "{{route('asset.ajax.request')}}";
        var wrapper = $('#add-assets');
        var add =$('.addasset');
        var remove = $('.removeasset');
        add.on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url:uri,
                dataType: "json",
                success: function (data) {
                    var  asset = '<div class="asset-div"><label class="col-lg-2 control-label labelrem" style="clear:both;">Add a Part</label>' +
                        +data.aaData
                        +'</select></div>' +
                        '<div class="col-sm-4 divbutton"><label class="col-sm-2 control-label">QTY</label>' +
                        '<a class="btn btn-danger removeasset" href="javascript:void(0)"><i class="fa fa-minus-square"></i></a></div></div>';
                    wrapper.append(asset);
                }
            });
        });
        $(wrapper).on('click', '.removeasset', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).closest('.asset-div').remove();
        });
    });
</script>
