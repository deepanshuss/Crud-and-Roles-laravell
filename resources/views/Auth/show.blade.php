<html>
    <head>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container" style="margin-top:50px">
      <h1>Show Enteries</h1>

       <table class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
           </tr>
         </thead>
         <tbody>
           <tr>
            
             <td>{{$student->username}}</td>
             <td>{{$student->email}}</td>
             <td>{{$student->Role}}</td>
           
           </tr>
         </tbody>
       </table>

    
</div>

    </body>
</html>