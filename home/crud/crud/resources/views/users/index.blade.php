<form action="http://127.0.0.1:8000/users/create" method="GET">
    <button type="submit">CREATE USERS</button>
</form>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="{{asset('users'.$user->id)}}" method="GET">
                    <button type="submit">MORE</button>
                </form>
            </td>
            <td>
                <form action="http://127.0.0.1:8000/users/{{$user->id}} " method="POST" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">DELETE</button>
                </form>
            </td>
            <td>
            <form action="{{asset('/users/'.$user->id.'/edit')}}" method="GET">
              
                <button type="submit">EDIT</button>
            </form>
            </td>

            
            
        </tr>
        @endforeach
    </tbody>
</table>