<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container" style="margin-top:50px">
      <h1>Login Form</h1>
    <form action="{{route('login.user')}}" method="post">
    @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('failed'))
      <div class="alert alert-danger">{{Session::get('failed')}}</div>
      @endif
      @csrf
           
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
              <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{old('password')}}">
              <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>


           <button type="submit" class="btn btn-primary">Submit</button>
           <br>
             <a href="{{route('auth.register')}}">New User !! Register Here</a>
     </form>

</div>
    </body>
</html>