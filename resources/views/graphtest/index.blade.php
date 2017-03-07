<!DOCTYPE html>
<html>
    <head>
        <title>GraphTest</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
        @include('head')
    </head>
    <body>
        @include('navbar')

        <h1>Graph Test</h1>
        <div class="container" style="width:100%">
            <canvas id="canvas"></canvas>
        </div>
    </body>
</html>
<script>
     var count = 0;
      var countup = function(){
        console.log(count++);
      } 
    var refresh = function(){
        $.ajax({
        type: 'GET',
        url: 'getjson',
        dataType: 'json',
        success: function (data) {
            //結果が0件の場合
            if (data == null)
                alert('データが0件でした');
            var len = data.length;
            //alert(data["datasets"][0]["label"]);
            var complexChartOption = {
                responsive: true,
            };
            ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: complexChartOption
            });
        }
    });
    }
    setInterval(refresh,10000);
</script>
<!--kadfhakhahgklahdga /-->
