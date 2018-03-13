<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href = "css/sidenav.css">
        <link rel="stylesheet" href = "css/menuicon.css">
        <link rel="stylesheet" href = "css/navbar.css">
        <link rel="stylesheet" href = "css/adminlandingpage.css">


        <title>Admin Dashboard</title>

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
                <a href = "#">Create New Course</a>
              </li>
              <li>
              <a href = "#">View Course</a>
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

      <!-- Admin Landing page -->
     

       <h3 class = "pageTitle" >Admin Dashboard</h3>
       <div class ="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="" alt="">
                    <div class="card-block">
                        <h4 class="card-title">Create New Account</h4>
                        <p class="card-text">Create a new Student / Unit Coordinator / System Admin user account.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="" alt="">
                    <div class="card-block">
                        <h4 class="card-title">Create New Unit</h4>
                        <p class="card-text">Create a new academic unit.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="" alt="">
                    <div class="card-block">
                        <h4 class="card-title">Create New Teaching Period</h4>
                        <p class="card-text">Create a new Teaching Period.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                        <img class="card-img-top img-fluid" src="" alt="">
                    <div class="card-block">
                        <h4 class="card-title">View Account</h4>
                        <p class="card-text">View and edit user account details.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                    <div class="card">
                            <img class="card-img-top img-fluid" src="" alt="">
                        <div class="card-block">
                            <h4 class="card-title">View Unit</h4>
                            <p class="card-text">View and academic edit unit details.</p>
                        </div>
                    </div>
                </div>

            <div class="col-sm-4">
                <div class="card">
                        <img class="card-img-top img-fluid" src="" alt="">
                    <div class="card-block">
                        <h4 class="card-title">View Teaching Period</h4>
                        <p class="card-text">View and edit teaching period details.</p>
                    </div>
                </div>
            </div>

        </div> 
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


    </script>
    </body>
   </html>