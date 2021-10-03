
<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
     
    <div class="container" style="margin-top:50px">
    <div class=row>
        <div class="col-sm-8">  
            <h1>Roles Management</h1>
            <p></p>
            @if(Session::has('falied'))
      <div class="alert alert-success">{{Session::get('falied')}}</div>
      @endif
            <table class="table table-bordered table-striped">
           
             <thead>
               
             <tr>
                 <th>ID</th>
                 <th>ROLE</th>
                 <th>Action</th>
     
             </tr>
             </thead>
             <tbody>
             @foreach($data as $demo) 
               <tr>
                   
                   <td>{{$demo->id}}</td>
                   <td>{{$demo->Role_name}}</td>
                   <!-- <td><a href="" class="btn btn-primary btn-sm">Show</a></td>
                   <td><a href="" class="btn btn-primary btn-sm">Edit</a></td> -->
                   <td><a href="{{'roledelete/'.$demo->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                 

                  
               </tr>
               @endforeach()
              
               </tbody>

            </table>

        </div>

        
    </div>
     
    
    
     </div>

    </body>
</html>