<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
    <form action="http://127.0.0.1:8000/index/{{$user->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <label for="">NAME</label>
        <input type="text" name="name" value="{{$user->name}}">
        <label for="">GMAIL</label>
        <input type="email" name="gmail"  value="{{$user->gmail}}">
        <label for="">PASSWORD</label>
        <input type="password" name="password" value="{{$user->password}}">
        
        <button type="submit">UPDATE</button>
            
       
    </form>
</body>
</html>