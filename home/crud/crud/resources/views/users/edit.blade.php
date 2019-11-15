<form action="{{route('users.update'.$user->id)}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label >Name</label>
        <input type="text" name="{{$users->name}}" >
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="{{$users->name}}" >
    </div>
    
    <div>
        <button type="submit">UPDATE </button>
    </div>
</form>