<html>
<head>
<title>
Html form
</title>

<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

</head>



<body >
  <table class="table table-striped">
    <thead>
     <tr>
     <th>users id</th>
     <th>first name</th>
     <th>last name</th>
     <th>location</th>
     <th>email</th>
     <th>password</th>
     <th>gender</th>
     <th>contacts</th>
     <th>Action</th>
     </tr>
     </thead>
     <tbody>
      @foreach ($users as $user)
     <tr>
      <td>{{$user->user_id}}</td>
     <td>{{$user->first_name}}</td>
     <td>{{$user->last_name}}</td>
     <td>{{$user->location}}</td>
     <td>{{$user->email}}</td>
     <td>{{$user->password}}</td>
     <td>{{$user->gender}}</td>
     <td>{{$user->contacts}}</td>
     <td><button type="button" class="btn btn-danger">block</button>
     <button type="button" class="btn btn-success">update</button> 
     <button type="button" class="btn btn-warning">reset pasword</button></td>
     </tr>
     @endforeach
     <tr>
      <td>1</td>
     <td>Siphael</td>
     <td>Betuel</td>
     <td>cive</td>
     <td>Siphael.betuel@gmail.com</td>
     <td>Sipbetuel@gmail778.com</td>
     <td>male</td>
     <td>0625200214</td>
     <td><button type="button" class="btn btn-danger">block</button>
     <button type="button" class="btn btn-success">update</button> 
     <button type="button" class="btn btn-warning">reset pasword</button></td>
     </tr>
     </tbody>
    </table>
    <br>
    <form role=“form” action="">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox">Remember me</label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

</body>
</html>