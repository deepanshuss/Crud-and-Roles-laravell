
<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
     
    <div class="container" style="margin-top:50px">
    <div class=row>
        <div class="col-sm-8">
            <h1>Welcome to Dashboard</h1>
            <p></p>
            <table class="table table-bordered table-striped">
           
             <thead>  
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>EMAIL</th>
                 <th>ROLES</th>
             </tr>
             </thead>
             
             <tbody>
                 @foreach($data as $datas)
               <tr>
                   <td> {{$datas->id}} </td>
                   <td> {{$datas->username}} </td>
                   <td> {{$datas->email}} </td> 
                   <td> {{$datas->Role}} </td>    
                   
                   <td><a href="{{'show/' .$datas->id}}" class="btn btn-primary btn-sm">Show</a></td>
                   <td><a href="{{'edit/' .$datas->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                   <td><a href="{{'delete/'.$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td>
               </tr>
                @endforeach
               </tbody>

            </table>

        </div>

         <div class="col-sm-2">
          <div class="row">
           <a href="" class="btn btn-primary btn-sm">LOGOUT</a>
          </div>

        </div>
    </div>
     
    
    
     </div>

    </body>
</html>