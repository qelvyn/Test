<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <title>SPESys</title>

        <!-- Styles -->
        <style>
            body {
                background-color: skyblue;
            }

            .loginform{
                margin-top: 60px;
                box-shadow: 0px 0px 10px 1px grey;
                border-radius:5px;
                padding-bottom: 20px;
                background: navy;

            }

             .title{
                 background: lightseagreen;
                 padding:10px;
                 text-align: center;
                 color:#fff;
                 border-radius: 0px 0px 10px 10px;
             }

             .subtitle{
                font-size: 80%;
                text-align: center;
                color: #fff;
                padding:5px;
             }

             a { 
                color:#fff;
                text-decoration:none;
                font-size: 70%;
               }

            a:hover { 
                color:#fff;
               }

        </style>
    </head>
    <body>
        <div class = "container">

            <div class = "loginform col-md-4 offset-md-4">

                <h1 class = "title">SPESys</h1>  
                 <h3 class = "subtitle">Self & Peers Evaluation System</h3>
                <form>

                    <div class="form-group">
                       <input type="text" placeholder = "UserID" class = "form-control">     
                    </div>

                    <div class="form-group">
                       <input type="password" placeholder = "Password"  class = "form-control">     
                    </div>

                    <button class = "btn-btn-primary btn-block">Login</button>

                   
                    <div class="text-center">
                       <a href = "#">Reset Password</a>
                    </div>
                    

                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                </form>
                </div>
            </div>
    </body>
    
</html>
