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
        <input type="button" id="switch" name="switch" value="Switch" align="right">
        <div class="container" style="width:50%">
            <canvas id="canvas" height="450" width="600"></canvas>
        </div>
    </body>
</html>
<script>
     var count = 0;
     var Data;
     function switchGraph(data){
         var tmp=data["datasets"][1];
         data["datasets"][1]= data["datasets"][0];
         data["datasets"][0]=tmp;
         var type_tmp=data["datasets"][1]["type"];
         data["datasets"][1]["type"]=data["datasets"][0]["type"];
         data["datasets"][0]["type"]=type_tmp;
         return data;
     }
     var draw = function(Data){
         var complexChartOption = {
                responsive: true,
            };
         ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: Data,
                options: complexChartOption
            });
     }
     window.myBar;
     $("#switch").on("click",function(){
         var doWork = function(){
            var defer = $.Deferred();
            $("#switch").prop("disabled", true);
            Data = switchGraph(Data);
            draw(Data);
            defer.resolve();
            return defer.promise();
        }
        var promise = doWork();
            promise.done(function(){
             $("#switch").prop("disabled", false);
        });
     });
      var countup = function(){
        console.log(count++);
      } 
      var refresh = function(){
        $.when(
            $.ajax({
                type: 'GET',
                url: 'getjson',
                dataType: 'json',
                success: function (data) {
                    //結果が0件の場合
                    Data=data;
                    if (data == null)
                        alert('データが0件でした');
                    var len = data.length;
                    //alert(data["datasets"][0]["label"]);
                    draw(Data);
                }
            })
            ).done(function(){
                $("#switch").prop("disabled", false);
             })
    }
    setInterval(refresh,10000);
    $(document).ready(function(){
        refresh();
  });
    
</script>
<!--kadfhakhahgklahdga /-->
