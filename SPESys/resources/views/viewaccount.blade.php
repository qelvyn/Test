<!-- biewaccount.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Account</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>UserID</th>
        <th>UserType</th>
        <th>Title</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($accounts as $product)
      <tr>
        <td>{{$product['userid']}}</td>
        <td>{{$product['usertype']}}</td>
        <td>{{$product['title']}}</td>
        <td>{{$product['firstname']}}</td>
        <td>{{$product['lastname']}}</td>
        <td>{{$product['email']}}</td>
        <td>{{$product['password']}}</td>
        <td><a href="{{action('AccountController@edit', $product['userid'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('AccountController@destroy', $product['userid'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>