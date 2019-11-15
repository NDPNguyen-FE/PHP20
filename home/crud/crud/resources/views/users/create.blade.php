<form action="http://127.0.0.1:8000/users" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label >Name</label>
        <input type="text" name="name" >
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" >
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" >
    </div>
    <div>
        <button type="submit">SIGN UP</button>
    </div>
</form>