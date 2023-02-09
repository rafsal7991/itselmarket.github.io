@extends('dashboard')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>www.itsel.co.tz</title>

        <link href="/css/homepage.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        body{
         
  font-family: 'Nunito', sans-serif;
}


        </style>

<script type="text/javascript">
 function form(){
  var x ="hellow";
    document.getElementById("butform").innerHTML =document.getElementById("but").innerHTML=x;
    document.getElementById("butform").setAttribute("type","hidden");
 }
</script>


    </head>
    <body>
    @section('dashboard')
    <main>
      <div id="products">
    <h1>ITSEL USERS </h1>
    <table class="table table-striped">
        <thead>
         <tr>
         <th>id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Created</th>
         <th>Updated</th>
         <th>Action</th>
         </tr>
         </thead>
         <tbody>
        @foreach ($userlist as $item)
         <tr>
         <td>{{$item->id}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->email}}</td>
         <td> {{$item->created_at}}</td>
         <td>{{$item->updated_at}}</td>
         <td><button type="button" class="btn btn-danger">block</button>
          <button type="button" class="btn btn-success">update</button> 
          <button type="button" class="btn btn-warning">reset pasword</button></td>
         </tr>
         @endforeach
         </tbody>
        </table>
  </div>
  <script type="text/javascript">
     var x ="hellow";
       document.getElementById("butform").innerHTML =document.getElementById("but").innerHTML=x;
       document.getElementById("butform").setAttribute("type","hidden");
    
   </script>
  <div id="butform">
    <button type="button" class="btn btn-success" onclick="form()">add user</button> 
  </div>
  <div id="but">
    <p> <div id="form">
      <form action="userist">
        <div class="form-group">
          <label for="username">Name</label>
          <input type="text" class="form-control" id="username">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pasword">pasword</label>
          <input type="password" class="form-control" id="pasword">
        </div>
        <div class="form-group">
          <label for="comfirmpasword">comfirm pasword</label>
          <input type="password" class="form-control" id="comfirmpasword">
        </div>
        <button type="button" class="btn btn-success">add user</button> 
      </form>
    </div></p> 
  </div>
</main>
<footer class="footer">
  <div class="bottom-links">
    <div class="links">
      <span>More Info</span>
      <a href="/">Home</a>
      <a href="about">About Us</a>
      <a href="/products">Blog</a>
    </div>
    <div class="links">
      <span>Social Links</span>
      <a href="#"><i class="fab fa-facebook"><img src="/images/facebook.png" alt="me" height="21px" width="31px">the_itsel</i></a>
      <a href="#"><i class="fab fa-twitter"><img src="/images/Twitter.png" alt="me" height="21px" width="31px">@the_itsel</i></a>
      <a href="#"><i class="fab fa-instagram"><img src="/images/insta.png" alt="me" height="21px" width="31px">@official_itsel</i></a>
    </div>
    <div class="links">
      <span>Contact us</span>
    <a href="#"><i class="fab fa-instagram"><img src="/images/call.png" alt="me" height="21px" width="31px">0625200214</i></a>
    <a href="#"><i class="fab fa-instagram"><img src="/images/whatsap.png" alt="me" height="21px" width="31px">+255625200214</i></a>
    <a href="#"><i class="fab fa-instagram"><img src="/images/email.png" alt="me" height="21px" width="31px">the_itsel@gmail.com</i></a>
  </div>
</footer>
<div class="copy">&copy; 2023 Developed&maintained by raphaelrichard.All rights reserved</div>

    </body>
    @endsection
</html>
