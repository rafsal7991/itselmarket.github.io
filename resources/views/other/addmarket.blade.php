
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




    </head>
    <body>
    @section('dashboard')
    <main>
      <div id="products">
  <div class="pintro">
    <h1>THE MARKETS </h1>
    <form action="makemarket">
        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" name="product_name">
        </div> 
        <div class="form-group">
            <label for="customer_name">customer Name</label>
            <input type="text" class="form-control" name="customer_name">
          </div>
        <div class="form-group">
            <label for="Product_location">Product Location</label>
            <input type="text" class="form-control" name="location">
          </div>
          <div class="form-group">
            <label for="units">Units</label>
            <input type="text" class="form-control" name="units">
          </div>
        <button type="submit" class="btn btn-success">add Product</button> 
      </form>
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