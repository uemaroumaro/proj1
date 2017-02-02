<!DOCTYPE html>
<html>
    <head>
        <title>MongoDBTest</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="iewport" content="width=device-width, initial-scale=1">
        <title>Sample</title>
        <!-- BootstrapのCSS読み込み -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery読み込み -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- BootstrapのJS読み込み -->
        <script src="js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div><h1>t_userの内容</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-md-2">名前</th><th>住所</th><th>職業</th><th>年齢</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($users as $user)
                        <tr>
                        <th>{{$user->name}}</th><th>{{$user->address}}</th><th>{{$user->occupation}}</th><th>{{$user->age}}</th>
                        </tr>
                        @endforeach
                    
                </tbody>
            </table>
        </div>
        <h1>カラム登録</h1>
        <form action="add.php">
            <input type="text" name="name" placeholder="名前を入力">
            <input type="text" name="address" placeholder="住所を入力">
            <input type="text" name="occupation" placeholder="職業を入力">
            <input type="text" name="age" placeholder="年齢を入力">
            <input type="submit" values="送信">
        </form> 
    </body>
</html>
