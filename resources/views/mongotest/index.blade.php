<!DOCTYPE html>
<html>
    <head>
        <title>MongoDBTest</title>
        @include('head')
    </head>
    <body>
        @include('navbar')
        <div><h1>data_testの内容</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-md-2">ID</th><th>decimal</th><th>integer</th><th>string</th><th>datetime</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_test as $data)
                    <tr>
                        <th>{{$data->ID}}</th><th>{{$data->decimal}}</th><th>{{$data->integer}}</th><th>{{$data->string}}</th><th>{{$data->datetime}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--<h1>カラム登録</h1>
        <form action="add.php">
            <input type="text" name="name" placeholder="名前を入力">
            <input type="text" name="address" placeholder="住所を入力">
            <input type="text" name="occupation" placeholder="職業を入力">
            <input type="text" name="age" placeholder="年齢を入力">
            <input type="submit" values="送信">
        </form>
        -->
    </body>
</html>
