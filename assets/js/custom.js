$(document).ready(function() {

    $(function() {

        //assign data in modal for sarok edit
        $('.applyid').click(function() {

            let id = $(this).attr('value');

            $.ajax({
                url: "functions.php",
                method: 'get',
                data: {
                    page: 'apply',
                    getapplydata: 'getapplydata',
                    id: id
                },
                success: function(d) {

                    $('#applyid').val(d.id);
                    $('#sarokname').val(d.sharok);

                },
                error: function(err) {

                    console.log(err);
                }
            });
        });



        //calculate area
        function calculateArea() {

            let length = $('#length').val();
            let width = $('#width').val();
            let area = length * width;
            $('#area').val(area);
        }

        $('#length').keyup(function() {
            length = $(this).val();
            calculateArea();
            rateCalc();
        });

        $('#width').keyup(function() {
            width = $(this).val();
            calculateArea();
            rateCalc();
        });


        //calculate residencial area(abasik)
        //calculate area
        function calculateRecidencialArea() {

            let rlength = $('#rlength').val();
            let rwidth = $('#rwidth').val();
            let rnumber = $('#rnumber').val();

            let rarea = rlength * rwidth * rnumber;
            $('#rarea').val(rarea);
        }

        $('#rlength').keyup(function() {
            length = $(this).val();
            calculateRecidencialArea();
            rateCalc();
        });

        $('#rwidth').keyup(function() {
            width = $(this).val();
            calculateRecidencialArea();
            rateCalc();
        });

        //calculate area
        function calculateCommercialarea() {

            let clength = $('#clength').val();
            let cwidth = $('#cwidth').val();

            let cnumber = $('#cnumber').val();
            let carea = clength * cwidth * cnumber;

            $('#carea').val(carea);
            rateCalc();
        }

        //calculate border area
        function calculateBorderarea() {

            let blength = $('#blength').val();
            let bwidth = $('#bwidth').val();
            let bnumber = $('#bnumber').val();
            let barea = blength * bwidth * bnumber;

            $('#barea').val(barea);
            //rateCalc();
        }


        //calculate recidencial-border area
        function calculateRecidencialBorderarea() {

            let rblength = $('#rblength').val();
            let rbwidth = $('#rbwidth').val();

            let rbnumber = $('#rbnumber').val();
            let rbarea = rblength * rbwidth * rbnumber;

            $('#rbarea').val(rbarea);
            //rateCalc();
        }




        //calculate other area
        function calculateOtherarea() {

            let olength = $('#olength').val();
            let owidth = $('#owidth').val();

            let onumber = $('#onumber').val();
            let oarea = olength * owidth * onumber;

            $('#oarea').val(oarea);
            //rateCalc();
        }


        ///key up events
        $('#clength').keyup(function() {
            clength = $(this).val();
            calculateCommercialarea();
        });

        $('#cwidth').keyup(function() {
            cwidth = $(this).val();
            calculateCommercialarea();
        });

        $('#rnumber').keyup(function() {
            //cwidth = $(this).val();
            calculateRecidencialArea();
            rateCalc();
        });

        $('#cnumber').keyup(function() {
            //cwidth = $(this).val();
            calculateCommercialarea();
            rateCalc();
        });

        $('#rarea').keyup(function() {
            rateCalc();
        });
        $('#carea').keyup(function() {
            rateCalc();
        });

        $('#blength').keyup(function() {
            calculateBorderarea();
        });

        $('#bwidth').keyup(function() {
            calculateBorderarea();
            rateCalc();
        });

        $('#bnumber').keyup(function() {
            calculateBorderarea();
            rateCalc();
        });

        $('#rblength').keyup(function() {
            calculateRecidencialBorderarea();
        });

        $('#rbwidth').keyup(function() {
            calculateRecidencialBorderarea();
            rateCalc();
        });

        $('#rbnumber').keyup(function() {
            calculateRecidencialBorderarea();
            rateCalc();
        });

        $('#olength').keyup(function() {
            calculateOtherarea();
            rateCalc();
        });

        $('#owidth').keyup(function() {
            calculateOtherarea();
            rateCalc();
        });

        $('#onumber').keyup(function() {
            calculateOtherarea();
            rateCalc();
        });


        //nirman approve fee and vat calculation
        
        $('#approve_fee').keyup(function(){
            var app_fee = app_vat = 0;
            app_fee = parseInt($(this).val());
            app_vat = parseInt($('#approve_vat').val());
            $('#total_approve_fee').val(app_fee + app_vat);
        });

        $('#approve_vat').keyup(function(){
            var app_fee = app_vat = 0;
            app_fee = parseInt($('#approve_fee').val());
            app_vat = parseInt($(this).val());
            $('#total_approve_fee').val(app_fee + app_vat);

        });


    });


    function rateCalc() {
        //vat and rate calculation
        $.ajax({
            url: "functions.php",
            method: 'get',
            data: {
                page: 'apply',
                getratedata: 'getratedata'
            },
            dataType: 'json',
            success: function(d) {

                var rrate = d[0].rfee; //recidensial area rate
                var crate = d[1].rfee; //commercial area rate
                var rbrate = d[2].rfee; //recidencial-border area rate
                var brate = d[3].rfee; //border area rate
                var orate = d[4].rfee; //other area rate

                var vat = d[1].vat; //commercial area rate


                var rval = parseInt($('#rarea').val()); //commercial area
                var cval = parseInt($('#carea').val()); //recidensial area
                var rbval = parseInt($('#rbarea').val()); //border area
                var bval = parseInt($('#barea').val()); //border area
                var oval = parseInt($('#oarea').val()); //other area

                if (isNaN(cval)) {
                    cval = 0;
                }

                if (isNaN(rval)) {
                    rval = 0;
                }

                if (isNaN(bval)) {
                    bval = 0;
                }

                if (isNaN(rbval)) {
                    rbval = 0;
                }



                if (isNaN(oval)) {
                    oval = 0;
                }

                var total = cval + rval + rbval + bval + oval;
                var approve_vat = (vat / 100) * total;
                var withvat = ((vat / 100) * total) + total;

                $("#approve_fee").val(total.toFixed(0));
                $("#approve_vat").val(approve_vat.toFixed(0));
                $("#total_approve_fee").val(withvat.toFixed(0));


            },
            error: function(err) {

                console.log(err);
            }
        });
    }


    //permanent address confirmation
    var addconfirmkey = 0;
    $('#addressconfirm').click(function() {

        var chome = $('#chome').val();
        var cvill = $('#cvill').val();
        var cpost = $('#cpost').val();
        var cps = $('#cps').val();
        var cdist = $('#cdist').val();

        if (addconfirmkey === 0) {

            $('#phome').val(chome);
            $('#pvill').val(cvill);
            $('#ppost').val(cpost);
            $('#pps').val(cps);
            $('#pdist').val(cdist);

            addconfirmkey = 1;

        } else {
            $('#phome').val("");
            $('#pvill').val("");
            $('#ppost').val("");
            $('#pps').val("");
            $('#pdist').val("");
            addconfirmkey = 0;
        }

    });



});