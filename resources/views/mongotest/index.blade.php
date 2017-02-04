<!DOCTYPE html>
<html>
    <head>
        <title>MongoDBTest</title>
        @include('head')
    </head>
    <body>
        @include('navbar')
        <div><h1>t_usersの内容</h1>
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
