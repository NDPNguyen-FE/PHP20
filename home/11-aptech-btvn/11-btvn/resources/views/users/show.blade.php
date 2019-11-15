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
    <form >
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gmail</th>
                <th>Password</th>
                
            </tr>
            
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->gmail}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                </tr>
            
        </table>
    </form>
</body>
</html>