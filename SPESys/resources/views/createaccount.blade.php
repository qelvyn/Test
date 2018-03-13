<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href = "css/sidenav.css">
        <link rel="stylesheet" href = "css/createaccount.css">
        <link rel="stylesheet" href = "css/menuicon.css">
        <link rel="stylesheet" href = "css/navbar.css">


        <title>Create New Account</title>

         </head>
         <body>
        
        <div id = "wrapper">

        <!-- SPESys Sidebar -->
        <div id = "sidebar-wrapper">
            <ul class = "sidebar-nav">
              <li class = "active">
                <a href = "#">Create New Account</a>
              </li>
              <li>
                <a href = "#">View Account</a>
              </li>
              <li>
                <a href = "#">Create New Unit</a>
              </li>
              <li>
              <a href = "#">View Unit</a>
              </li>
              <li>
              <a href = "#">Create New Teaching Period</a>
              </li>
              <li>
              <a href = "#">View Teaching Period</a>
              </li>
            </ul>
        </div>

        <!-- Nav page and its contents -->
        <div id = "page-content-wrapper">
          <nav class = "navbar navbar-default navbar-fixed-top">
            <div class = "container-fluid">
               
        <div class="navbar-collapse collapse">
            
        <ul class="nav navbar-nav">
            <div class = "navbar-brand" href = "#menu-toggle"  id = "menu-toggle" onclick = "menuIconFunction(this)">
                <div class = "line1"></div>
                <div class = "line2"></div>
                <div class = "line3"></div>
            </div>
              <li><a href = "#">SPESys</a></li>
              <li><a>Admin Dashboard</a></li>
        </ul>

              <!--Menu Items on a normal window-->
            <ul class = "nav navbar-nav navbar-right">
              <li class = "dropdown">
               <li class= "dropdown-toggle" data-toggle="dropdown" href="#"> 
                  <span class = "glyphicon glyphicon-cog"></span>
               </li>
               <ul class= "dropdown-menu dropdown-menu-right">
                 <li><a href="#">Help Manual</a></li>
                 <li><a href="#">Logout</a></li>
               </ul>
              </li>
            </ul>

           </div>
        </div>
        </nav>

      <!-- Create New Account Form -->
     
     <div class = "container">
       <h3 class = "pageTitle" >Create New Account</h3>
     
          <form class = "form-horizontal" method="post" action="{{url('accounts')}}" id = "accountForm">
              {{csrf_field()}}

              @if (\Session::has('success'))
              <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
              </div><br/>
              @endif

       <div class="form-group {{ $errors->has('userid') ? 'has-error': ''}} ">
        <label for = "userid" class="control-label col-sm-5">User Account ID: </label>
        <div class="col-sm-4">
       <input type = "text" class="form-control" name = "userid" placeholder = "Student/Staff ID (String)">
       <span class = "text - danger">{{ $errors ->first('userid') }}</span>
      </div>
      </div>

       <div class = "form-group {{ $errors->has('usertype') ? 'has-error': ''}}">
         <label for = "account" class="control-label col-sm-5">Account Type: </label>
        <div class = "col-sm-4">
       <select id = "account" class = "form-control" name = "usertype"  placeholder = "Student/Staff ID (String)">
           <option value = "" style= "display:none">Select Account Type</option> 
           <option value = "staff">Staff</option>
           <option value = "student">Student</option>
       </select>
       <span class = "text - danger">{{ $errors ->first('usertype') }}</span>
       </div>
    </div>

    <div class = "form-group {{ $errors->has('title') ? 'has-error': ''}}">
       <label for = "title" class = "control-label col-sm-5">Title: </label>
        <div class = "col-sm-4">
         <select id = "title" class = "form-control" name = "title">
           <option value = "" style= "display:none">Select Title</option> 
           <option value = "mr">Mr</option>
           <option value = "mdm">Mdm</option>
           <option value = "miss">Miss</option>
        </select>
        <span class = "text - danger">{{ $errors ->first('title') }}</span>
      </div>
    </div>

    <div class = "form-group {{ $errors->has('firstname') ? 'has-error': ''}} ">
        <label for = "fname" class = "control-label col-sm-5">First Name: </label>
    <div class = "col-sm-4">
        <input type = "text" class = "form-control" id = "fname" name = "firstname" placeholder = "First Name (String)">
        <span class = "text - danger">{{ $errors ->first('firstname') }}</span>
      </div>
    </div>

    <div class = "form-group {{ $errors->has('lastname') ? 'has-error': ''}} ">
        <label for = "lname" class = "control-label col-sm-5">Last Name: </label>
    <div class = "col-sm-4">
        <input type = "text" class = "form-control" id = "lname" name = "lastname" placeholder = "Last Name (String)">
    <span class = "text - danger">{{ $errors ->first('lastname') }}</span>
    </div>
    </div>

    <div class = "form-group {{ $errors->has('email') ? 'has-error': ''}} ">
        <label for = "mail" class = "control-label col-sm-5">Email: </label>
     <div class = "col-sm-4">
        <input type = "text" class = "form-control" id = "mail" name = "email" placeholder = "Email (String)">
        <span class = "text - danger">{{ $errors ->first('email') }}</span>
      </div>
   </div>

   <div class = "form-group {{ $errors->has('password') ? 'has-error': ''}} ">
        <label for = "word" class = "control-label col-sm-5">Password: </label>
        <div class = "col-sm-4">
         <input type = "text" class = "form-control" id = "word" name = "password" placeholder = "Password (String)">
         <span class = "text - danger">{{ $errors ->first('password') }}</span>
        </div>
   </div>

   <div class = "form-group">
     <div class="col-sm-offset-2 col-sm-9">
        <button type= "create" class="btn btn-default">Create</button>
        <button type= "reset" class="btn btn-default" onclick="resetFunction()">Clear</button>
     </div>
    </div>

</form>
</div>


      <!-- Bootstrap core JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      

      <!-- Menu Toggle Script -->
    <script>
      
           $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
            
          function menuIconFunction(x) 
          {
            x.classList.toggle("change");
          }

          function resetFunction()
          {
            document.getElementById("accountForm").reset();
          }

    </script>
    </body>
   </html>