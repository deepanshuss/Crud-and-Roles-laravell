<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container" style="margin-top:50px">
      <h1>Edit & Update Student</h1>
    <form action="/update">

            <div class="form-group">
              <!-- <label for="exampleInputUsername1">ID</label> -->
              <input type="hidden" class="form-control" id="id" placeholder="ID" name="id" value={{$student['id']}}>
            
            </div>

            <div class="form-group">
              <label for="exampleInputUsername1">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username" value={{$student['username']}}>
            
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value={{$student['email']}}>
      
              
            </div>
           <br>
             
            <div class="input-group">
            <label for="Role">Choose a Role:</label>
              <select class="custom-select"  name="Role">
              
              @foreach($data as $values)
                 <option value="{{$values->Role_name}}">{{$values->Role_name}}</option>
              @endforeach
               
            </select>
         </div>
            <br>

            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password"  value={{$student['password']}}>
         
            </div> -->
         <br>

           <button type="submit" class="btn btn-primary">Submit</button>
           <br>
           
     </form>
</div>

    </body>
</html>