$(function () {
    function get15dayFromNow() {

        // return new Date(new Date().valueOf() + 4 * 24 * 60 * 60 * 1000);
         var nextdate = new Date().getDate()+1;
        return new Date(new Date("2022-11-"+nextdate).valueOf());

    }


    $('#clock-c').countdown(get15dayFromNow(), function (event) {
        var $this = $(this).html(event.strftime(''
            + '<p><span class="h1 font-weight-bold d-block bg-blue">%D</span><span class="d-block">Day%!d</span></p>'
            + '<p><span class="h1 font-weight-bold d-block bg-blue">%H</span><span class="d-block">Hours</span></p>'
            + '<p><span class="h1 font-weight-bold d-block bg-blue">%M</span><span class="d-block">Minutes</span></p>'
            + '<p><span class="h1 font-weight-bold d-block bg-blue">%S</span><span class="d-block">Seconds</span></p>'));
    });

});
