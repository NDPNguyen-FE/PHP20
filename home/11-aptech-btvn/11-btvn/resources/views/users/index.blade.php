<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px  solid  black;
            text-align: center;
        }
        table,td{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="http://127.0.0.1:8000/index" method="GET">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gmail</th>
                <th>Action</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->gmail}}</td>
                    <td style="display: flex;">
                        <form action="http://127.0.0.1:8000/index/{{$user->id}}" >
                            <button type="submit">SHOW</button>
                        </form>
             
                  
                        <form action="http://127.0.0.1:8000/edit/{{$user->id}}" method="GET" >
                            <button type="submit">EDIT</button>
                        </form>
                 
                   
                        <form action="http://127.0.0.1:8000/index/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <input type="hidden" name="_method" value=" delete">
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
            <form action="http://127.0.0.1:8000/create" method="GET">
                <button type="submit">CREATE USER</button>
            </form>
        </table>
    </form>
</body>
</html>
