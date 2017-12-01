<script type="application/javascript">
    $(function () {

        var wrapper = $('#add-assets');
        var add =$('.addasset');
        var remove = $('.removeasset');
        add.on('click', function (e) {
            e.preventDefault();
        var  asset = '<div class="asset-div"><label class="col-lg-2 control-label labelrem" style="clear:both;">Add a Part</label>' +
                    '<div class="col-sm-4 divselect"><select class="form-control m-bot15">' +
                    '<option>Antennas</option><option>BUC</option><option>LNB</option><option>Modem</option>' +
                    '<option>Antenna Mounts</option><option>Router</option><option>Router</option><option>Switch</option>' +
                    '<option>Servers</option><option>Hotspot</option><option>Wireless Controller</option><option>WAPs</option>' +
                    '<option>VoIP Phones</option><option>Thin Clients</option><option>Webcam</option><option>UPS</option>' +
                    '<option>Rack</option><option>Headset</option><option>Cisco</option></select></div>' +
                    '<div class="col-sm-4 divbutton"><label class="col-sm-2 control-label">QTY</label>' +
                    '<span class="col-sm-8"><input type="number" class="form-control"></span>' +
                    '<a class="btn btn-danger removeasset" href="javascript:void(0)"><i class="fa fa-minus-square"></i></a></div></div>';
            wrapper.append(asset);
        });
        $(wrapper).on('click', '.removeasset', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).closest('.asset-div').remove();
        });
    });
</script>
