<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="col-sm-12">
           <div class="col-sm-6"> </div> 
          <div class="col-sm-6">
            <a href="/createrole" class="btn btn-primary">Create Role</a>
          </div>
      <div>

 <div class="container" style="margin-top:50px">
        <h1>Registration Form</h1>
    <form action="{{route('login.ss')}}" method="POST">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('failed'))
      <div class="alert alert-danger">{{Session::get('failed')}}</div>
      @endif

      @csrf
      
    
            <div class="form-group">
              <label for="exampleInputUsername1">Username</label>
              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="username" value="{{old('username')}}">
              <span class="text-danger">@error('username'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
      
              <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"  value="{{old('password')}}">
              <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>
             <br>

            
            <div class="input-group">
            <label for="Role">Choose a Role:</label>
              <select class="custom-select"  name="Role">
              
              @foreach($datas as $values)
                 <option value="{{$values->Role_name}}">{{$values->Role_name}}</option>
              @endforeach
               
            </select>
            
           </div>
           <br>

           
           

           <button type="submit" class="btn btn-primary">Submit</button>
           <br>
           <a href="{{route('auth.login')}}">Already Registered !! Login Here</a>
     </form>
</div>

    </body>
</html>