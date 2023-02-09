
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="bootstrap-5.1.3-dist\js\bootstrap.esm.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
   
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 550px;
    }
    @media screen and (max-width:767px){
      .row.content
      {
        height: auto;
      }
    }
    
  </style>
</head>

<body>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      
      <H1 class="logo">THE ITSEL  <BR/> MARKET</H1>
      <div class="list-group">
        <a href="/"  class="list-group-item active">HOME</a>
        <a href="products"  class="list-group-item">PRODUCTS</a>
        <a href="myproducts"  class="list-group-item">MY PRODUCTS</a>
        <a href="addproducts"  class="list-group-item">ADD PRODUCTS</a>
        <a href="markets"  class="list-group-item">MARKETS</a>
        <a href="addmarket"  class="list-group-item">ADD MARKET</a>
        <a href="userlist"  class="list-group-item">USERS</a>
        <a class="list-group-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </div>
      <br>
    </div>
    <br>
   
    <div class="col-sm-9">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
                  </li>

                        
                </ul>
            </div>
        </div>
    </nav>
     @yield('dashboard')
      </div>
    </div>
  </div>
</div>
</body>
</html>
