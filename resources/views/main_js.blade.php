<script>
    let url = "/main"
    function getLastLottoNumber() {
        $.ajax({
            type: "GET",
            url: url + "/getLastLottoNumber",
            dataType: 'json',
            cache: false,
            async: false,
        }).done(function(result) {
            $("#lotto_no").text(result['drwNo'] + '회');
            $("#lotto_date").text(result['drwNoDate']);
            $("#no_1").text(result['drwtNo1']).addClass(result['num_color'][0]);
            $("#no_2").text(result['drwtNo2']).addClass(result['num_color'][1]);
            $("#no_3").text(result['drwtNo3']).addClass(result['num_color'][2]);
            $("#no_4").text(result['drwtNo4']).addClass(result['num_color'][3]);
            $("#no_5").text(result['drwtNo5']).addClass(result['num_color'][4]);
            $("#no_6").text(result['drwtNo6']).addClass(result['num_color'][5]);
        });
    }


    $(document).ready(function(){
        getLastLottoNumber();
    })
</script>
