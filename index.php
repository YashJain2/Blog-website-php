<?php
    $data = include("data.php");
    echo  '
    <!doctype html>
    <html lang="en">
      <head>
    
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name = "description" content = " ' . $data["description"] . ' ">
    
        <link href = "assets/style.css" rel = "stylesheet"/>
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <!-- Font Awesome Icons -->
        <script src="https://use.fontawesome.com/49da2a9049.js"></script>

        <title>
            '. $data["title"] .'
        </title>
        <style>
          .navbar-brand{
            color: #3B73E1 !important;
            font-size: 28px;
            font-weight: 900;
            font-family: arial;
            padding-left: 40px;
            padding-right: 40px;
    
          }
    
          .nav-link{
            color: black !important;
            font-size: 13px;
            font-weight: 700;
            margin-right:10px !important; 
          }
    
          .active
          {
            border-bottom: 2px solid #3b73e1;
          }
    
          .btn
          {
            font-size: 14px;
            padding-left: 30px;
            padding-right: 30px;
          }

          .container
          {
            padding-left: 12%;
            padding-right: 12%;
          }
          
        
             
        </style>
      </head>
      <body>
    
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" >Supertalk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">How its work?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Call us at +91 80000 45789</a>
            </li>
          </ul>
          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
          
            <ul class="navbar-nav d-flex justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  &#36 USD
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          
          <ul class="navbar-nav d-flex justify-content-end">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Connexion</a>
            </li>
          </ul>
          <button class=" btn btn-primary" type="submit">Get Started</button>  
        </div>
      </div>
    </nav>
    
    <div class="container mt-4">

    <h1>
        '. $data["h1"] .'
    </h1>

    <h6>
        '. $data["date"] .'
    </h6>

    <section class = "mt-3" style = "position: relative;">
          
          '. $data["author_picture"] .'    
          <span style="font-size:14px; position: relative; top:-15px; padding-left: 10px;">
            '. $data["author_name"] .'
          </span>
          '. $data["cover"] .'
    </section>

    <section class ="intro mt-5">
          '. $data['intro'] .'
    </section>
    <h1> Introduction </h1>
    <section class="content mt-5">
          '. $data['content'] .'
    </section>
    
    <section style="margin-top:50px;font-weight:700;font-size:18px; position: relative;">
      <span> Share Our Blog</span>
      <a href="#" style="text-decoration:none; color: #F9061B; border-radius:100%;padding:4px; float:right; margin-left:20px;">
        <i class="fa fa-2x fa-youtube" ></i>  
      </a>    
      <a href="#" style="text-decoration:none; color: #4867AA; border-radius:100%;padding:4px; float:right;margin-left:20px;">
        <i class="fa fa-2x fa-facebook" ></i>  
      </a>                      
      <a href="#" style="text-decoration:none; color: #0D99FF; border-radius:100%;padding:4px; float:right;margin-left:20px;">
        <i class="fa fa-2x fa-twitter" ></i>  
      </a>                      
    </section>

    </div>

    
    <section class="related-article" style="margin-top:70px; padding-top:50px;background: #FCFCFC;">
    <div class="" style="padding:40px;">
    <h1 style="text-align:center; font-weight: 700; padding-bottom:40px "> Related Articles</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col" style="padding-left:3%;">
      <div class="card shadow-sm">
          <img class="" width="100%" height="225" src="https://images.unsplash.com/photo-1548612864-608486a7ec05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MXx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60" />
        <div class="card-body">
          <h4>VoIP alternatives. Find your next buisness phone provider</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">November 8, 2021</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col" style="padding-left:3%;">
      <div class="card shadow-sm">
        <img class="" width="100%" height="225" src="https://images.unsplash.com/photo-1651237215945-73fa0e02f356?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NXx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60" />
        <div class="card-body">
        <h4>VoIP alternatives. Find your next buisness phone provider</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            
            <small class="text-muted">November 8, 2021</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col" style="padding-left:3%;">
      <div class="card shadow-sm">
        <img class="" width="100%" height="225" src="https://images.unsplash.com/photo-1598965897289-4768a8799acc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8M3x8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60" />
        <div class="card-body">
        <h4>VoIP alternatives. Find your next buisness phone provider</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            
            <small class="text-muted">November 8, 2021</small>
          </div>
        </div>
      </div>
    </div>
  </div>      
    </div>
    </section>

    <section class = "pricing" style="margin-top:50px; padding:8%;background: #1D5390">
      <div class = "container">
      <h1 style="text-align:center;font-size:40px;font-weight:700;color:#fff;line-height: 60px;">Simple all in one pricing <br/>with unlimited calls</h1>
      <div style="position:relative;left:50%;margin-left:-8%;border:5px solid #088B8C; width:16%;border-radius:20%; margin-top:30px;"></div>
  
      <div class = "row">
          <div class = "col" >
          <span style="color:#fff;font-size:8rem;font-weight:700;display:block;padding:0;"><span style="margin:0;font-size:6rem; font-weight:600;padding:0;position:relative;left:5px;">$</span>  19</span>
          <span style="display:block;padding-bottom:20px;padding-left:30px;font-size:1.2rem;color:#fff;font-weight:600;">Includes 1-3 people<br/> Additional: 10$ per month</span>
          <button type="button" class="btn btn-primary btn-lg" style="margin-left:30px;background:#088b8c;border:0;border-radius:0;font-size:1.6rem;padding-top:5px;padding-bottom:5px;">Get Started</button>        
          </div>
          <div class = "col">
          <ul class="mt-5" style="color:#fff ;padding:40px;font-size:1.2rem;">
          <li  style = "margin-top:20px;">
          Unlimited inbound and outbound calls within 36 countries
          </li>
          <li style = "margin-top:20px;">
          Setup less than 1 minute custom greeting, call routing, press1#, press 2#
          </li>
          <li style = "margin-top:20px;">
          Connect your eccomerce within 1 day.
          </li>
          </ul>
          </div>
      </div>
      
  
      </div>
    </section>
    
    
    
    
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
      </body>
    </html> ';
?>
