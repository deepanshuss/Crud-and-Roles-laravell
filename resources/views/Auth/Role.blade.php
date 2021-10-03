<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container" style="margin-top:50px">
        <h1>Create New Role</h1>
        <form action="/getrole" method="POST">
          @csrf
          <div class="form-group">
              <label for="exampleInputUsername1">Name</label>
              <input type="text" class="form-control" id="role" placeholder="Role" name="Role" value="">
            
          </div>
            <br>
           <button type="submit" class="btn btn-primary">Submit</button>
           <br>
             
        </form>
        </div>

    </body>
</html>