<script type="application/javascript">
    $(function () {

        var uri = "{{route('asset.ajax.request')}}";
        var wrapper = $('#add-assets');
        var add =$('.addasset');
        var remove = $('.removeasset');
        var optionValues = [];
        add.on('click', function (e) {
            var optionValues = [];
            $('.assets :selected').each(function() {
                if($(this).val() !='') {
                    optionValues.push($(this).val());
                }
            });
            e.preventDefault();
            $.ajax({
                type: "POST",
                url:  uri,
                data: {options: optionValues.toString()},
                dataType: "json",
                success: function (data) {
                    if(data.aaData != ""){
                    var  asset = '<div class="asset-div"><label class="col-lg-2 control-label labelrem" style="clear:both;">Add a Part</label>' +
                        '<div class="col-sm-4 divselect"><select required name="related_assets[]" class="form-control assets m-bot15">' +
                        '<option selected hidden>Select Asset</option>'
                        +data.aaData
                        +'</select></div>' +
                        '<div class="col-sm-4 divbutton"><label class="col-sm-2 control-label">QTY</label>' +
                        '<span class="col-sm-8"><input name="related_assets_qty[]" type="number" class="form-control"></span>' +
                        '<a class="btn btn-danger removeasset" href="javascript:void(0)"><i class="fa fa-minus-square"></i></a></div></div>';
                    wrapper.append(asset);
                    }else{
                        toastr.success("You Have Selected All Available Assets!.", "Info");
                    }
                }
            });
        });
        $(wrapper).on('click', '.removeasset', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).closest('.asset-div').remove();
        });
    });
</script>
