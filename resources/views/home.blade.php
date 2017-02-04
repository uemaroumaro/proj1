<!DOCTYPE html>
<html>
    <head>
        <title>Sample</title>
        @include('head')
    </head>
    <body>
        @include('navbar')
        <div class="container">
            <div class="starter-template">
                <h1><a href="mongotest">MongoDBTest</a></h1>
                <p class="lead">The page conducts tests of<br> basic operation of MongoDB.</p>
            </div>
            <div class="starter-template">
                <h1><a href="graphtest">GraphTest</a></h1>
                <p class="lead">The page conducts tests of<br> drowing graph by jquery.</p>
            </div>
            <div class="starter-template">
                <h1><a href="phpinfo">PhpInfo</a></h1>
                <p class="lead">You can see contains of phpInfo on the page.</p>
            </div>
        </div><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
