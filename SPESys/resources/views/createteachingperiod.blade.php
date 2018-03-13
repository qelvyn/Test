<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href = "css/sidenav.css">
        <link rel="stylesheet" href = "css/createteachingperiod.css">
        <link rel="stylesheet" href = "css/menuicon.css">
        <link rel="stylesheet" href = "css/navbar.css">


        <title>Create Teaching Period</title>

         </head>
         <body>
        
        <div id = "wrapper">

        <!-- SPESys Sidebar -->
        <div id = "sidebar-wrapper">
            <ul class = "sidebar-nav">
              <li class = "active">
                <a href = "#">Create Teaching Period</a>
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

      <!-- Create New Unit Form -->
     
     <div class = "container">
       <h3 class = "pageTitle" >Create Teaching Period</h3>
     

          <form class = "form-horizontal" method="post" action="{{url('teaching_periods')}}" id = "teachingPeriodForm">
              {{csrf_field()}}

              @if (\Session::has('success'))
              <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
              </div><br/>
              @endif

       <div class="form-group {{ $errors->has('teachingPeriodName') ? 'has-error': ''}} ">
        <label for = "tcode" class="control-label col-sm-5">Teaching Period: </label>
        <div class="col-sm-4">
       <input type = "text" class="form-control" name = "teachingPeriodName" placeholder = "Teaching Period Name">
       <span class = "text - danger">{{ $errors ->first('teachingPeriodName') }}</span>
      </div>
      </div>

    <div class = "form-group {{ $errors->has('location') ? 'has-error': ''}} ">
        <label for = "loc" class = "control-label col-sm-5">Location: </label>
    <div class = "col-sm-4">
        <input type = "text" class = "form-control" name = "location" placeholder = "Location (String)">
        <span class = "text - danger">{{ $errors ->first('location') }}</span>
      </div>
    </div>

    <div class = "form-group {{ $errors->has('startDate') ? 'has-error': ''}} ">
        <label for = "strtdate" class = "control-label col-sm-5">Start Date: </label>
    <div class = "col-sm-4">
        <input type = "text" class = "form-control" name = "startDate" placeholder = "Start Date (YYYY-MM-DD)">
    <span class = "text - danger">{{ $errors ->first('startDate') }}</span>
    </div>
    </div>

    <div class = "form-group {{ $errors->has('endDate') ? 'has-error': ''}} ">
            <label for = "eddate" class = "control-label col-sm-5">Start Date: </label>
        <div class = "col-sm-4">
            <input type = "text" class = "form-control" name = "endDate" placeholder = "End Date (YYYY-MM-DD)">
        <span class = "text - danger">{{ $errors ->first('endDate') }}</span>
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
            document.getElementById("teachingPeriodForm").reset();
          }

    </script>
    </body>
   </html>