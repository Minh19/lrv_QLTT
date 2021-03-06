<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{url('public/site')}}/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('public/site')}}/css/styles.css" rel="stylesheet" />

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
       
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        

    </head>
    <body id="page-top">
    <!-- Navigation-->
     <div class="d-flex justify-content-end" id="top">            
         <ul class="nav nav-pills nav-fill">
            <li class="nav-item align-self-center">
              <a class="nav-link text-dark" href="#" >Feedback</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link text-dark" href="#">Li??n h??? & h???i ????p</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">
                <select id="selecttop">
                  <option selected="TV">Ti???ng vi???t </option>
                  <option value="English">English</option>
              </select></a>
            </li>
        </ul>
    </div>
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg text-uppercase bg-white py-0" id="mainNav">
            <div class="container-fluid row">
                <a class="navbar-brand col-5" href="{{route('home.index')}}"><img src="{{url('public/site')}}/assets/img/new_banner.png" width="80%"></a>

                <form class="col-3 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     <div class="input-group">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                             aria-label="Search" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="button">
                                 <i class="fas fa-search fa-sm"></i>
                             </button>
                         </div>
                     </div>
                 </form>

                <ul class="navbar-nav mr-auto col-4 d-flex justify-content-end">
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                
                            </div>
                        </li>

                 <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{url('public/site')}}/img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{url('public/site')}}/img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                    </div>
                                </a>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                 <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 username">Khoa CNTT-KD</span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile_user.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            
        </nav>

    <!-- Menu -->
      
        <div class="container-fluid" id="bgmenu">
            <div class="container p-0">
             <ul class="nav nav-pills nav-fill" id="thanhcc">
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="{{route('home.index')}}" > Trang ch???</a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="{{route('home.TrinhGuiDuyetVanBan')}}">Tr??nh g???i duy???t v??n b???n</a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="#">Th??? t???c duy???t v??n b???n</a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="#">Qu???n l?? v??n b???n</a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="#">L???ch tu???n</a>
                </li>
                <li class="nav-item menu">
                  <a class="nav-link text-white" href="#">Li??n h???</a>
                </li>
            </ul>
            </div>
        </div>
    <!-- Content -->

@yield('main')

        <!-- Footer-->
        <footer class="footer py-3" id="footer">
            <div class="container">
                <div class="float-none"><a href="#"><img src="{{url('public/site')}}/assets/img/logo_footer.png" width="350px"></a></div>
                
                <h5 class="text-white mt-3">??OA??N THANH NI??N - H????I SINH VI??N TR??????NG ??A??I HO??C KINH T???? TP. H???? CHI?? MINH</h5>
                <hr>

                <ul  style="list-style-type:none;">
                  <li class="textft"><b >?????a ch???:</b> A.217 - 59C Nguy???n ????nh Chi???u, Ph?????ng V?? Th??? S??u, Qu???n 3, TP. H??? Ch?? Minh</li>
                  <li class="textft"><b>??i???n tho???i:</b> 84.28.36063090 </li>
                  <li class="textft"><b>Email:</b> youth@ueh.edu.vn</li>
                </ul>  
                    
                    <!-- Footer About Text-->
                <div class="mt-3">
                    <h6 class="text-uppercase text-white mb-4 ">About Freelancer</h6>
                    <p class="mb-0 textft">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                </div>
                     <!-- Footer Social Icons-->
                <div class="my-3 mt-3">
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
            </div>


        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-3 text-center text-white">
            <div class="container"><small>Copyright &copy; BIT-44 2021</small></div>
        </div>




       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('public/site')}}/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
