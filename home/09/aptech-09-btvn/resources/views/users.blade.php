<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        table,th,td{
            border: 1px  solid  black;
            border-collapse: collapse;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <table class="text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    for($i= 0; $i < 20; $i++){                   
                ?>
                    <tr>
                        <td>{{$users[$i]->id}}</td>
                        <td>{{$users[$i]->name}}</td>
                        <td>{{$users[$i]->email}}</td>
                        <td>{{$users[$i]->password}}</td>
                           
                    </tr>
                <?php }
                    ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>