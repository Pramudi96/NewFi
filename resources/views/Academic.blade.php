<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{config('app.name','Finance Management System')}}</title>

<!-- css -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
<link href="css/nivo-lightbox.css" rel="stylesheet" />
<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="css/owl.theme.css" rel="stylesheet" media="screen" />
<link href="css/animate.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet">

<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
<!-- template skin -->
<link id="t-colors" href="color/default.css" rel="stylesheet">
<style>
    div.vg{

        width: 100px;
        height: 100px;

    }
    .search{
        width:45% ;
        padding:10px ;
        font-size:20px ;

    }
    .submit{
        width:15% ;
        padding:10px ;
        font-size:20px ;
        background-color:#333333;
        color: white;
    }



</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: #36c94e">
            <div class="order-md-12 container">

                <nav>
                    <div class="row text-center logogif">

                        <img src="/img/scbd.gif" class="img-responsive img-circle logogif col-md-1">

                        <H1 style="min-width: 1000px; text-align: center; color: white"> NWP/ Wickaramashila Central College <br> Giriulla </H1>

                    </div>
                </nav>

            </div>

            <nav class="navbar navbar-expand-md navbar-light navbar-inverse bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--<img src="{{asset('images/wccgif.gif')}}" height="50px" width="100px">--}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active " style="color: white;font-family: Times New Roman; width:5%" href="#" >Home</a>
                            </li>
                            <li class="nav-item  col-md-2">
                                <a class="nav-link" style="color: white;font-family: Times New Roman; width: inherit" href="#">About WCC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " style="color: white;font-family: Times New Roman; width: inherit;" href="#">Student & Parents</a>
                            </li>
                            <li class="nav-item col-md-1">
                                <a class="nav-link " style="color: white;font-family: Times New Roman" href="#">Staff</a>
                            </li>

                            <li class="nav-item" >

                            <li class="nav-item dropdown col-md-2">
                                <a class="nav-link dropdown-toggle"  style="color: white; width: 150px" href="/Events" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academic</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class="dropdown-item" href="#">Acadamic</a>
                                    <a class="dropdown-item" href="#">Non-Academic</a>
                                </div>
                            </li>

                            <li class="nav-item  col-md-">
                                <a class="nav-link " style="color: white;font-family: Times New Roman; width: inherit" href="#">Library</a>
                            </li>

                            <li class="nav-item dropdown col-md-2">
                                <a class="nav-link dropdown-toggle"  style="color: white; width: 150px" href="/Events" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class="dropdown-item" href="/Event">Events</a>
                                    <a class="dropdown-item" href="#">Sports</a>
                                    <li class="dropdown-item" href="#">Clubs & Societies</li>
                                </ul>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: white" href="">{{ __('Register') }}</a>
                            </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" style="color: white" href=""
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action=""  method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</body>

<table width="100%" border="0">
    <td bgcolor="#a9a9a9"width="50%">






        <h1 font-color="White" align="center" >Other Bill Payments</h1>
        <div class="container">

            <form>

                <input type="text" name="text" class="search" placeholder="Search" >
                <input type="submit" name="submit" class="submit" value="Search">
            </form>


            <div class="row">


                <div class="col-md-12 animate-box fadeInUp animated-fast" width="50%">
                    <h3 > </h3>


                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Employee Number</label>

                            <div class="col-md-4">
                                <input id="EmpNo" type="text" class="form-control" name="Employee No    " value="" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label">Employee Name</label>

                            <div class="col-md-4">
                                <div >
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong></strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-md-4 control-label">Received Date</label>

                            <div class="col-md-4">
                                <div >
                                    <input id="ReceiveDate" type="date" class="form-control" name="RDate" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>

                                    <a class="btn btn-link" href="">
                                        Edit
                                    </a>
                                    <a class="btn btn-link" href="">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            </form>
        </div>
        </div>
        </div>



    </td>


    <td bgcolor="#a9a9a9"width="50%">

        <img src="/img/water.jpg"width="1100" height="750"></td>

</table>



</div>

</div>
</div>

<div class="row">
    <div class="col-md-12">
        <footer>

            <!-- Footer -->
            <div class="card-footer bg-dark text-light">
                <footer class="page-footer font-small blue pt-4">

                    <!-- Footer Links -->
                    <div class="container-fluid text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 mt-md-0 mt-3">

                                <!-- Content -->
                                <h5 class="text-uppercase" style="color:#fff">Contact Us</h5>
                                <p>Address : Wickramashila National school, Giriulla, Negombo-Kurunegala Rd, Giriulla</p>
                                Phone   : 0372 288 054       E-mail  :giriullawickramashila.@gmail.com</p>

                            </div>

                        </div>


                    </div>

                    <div class="footer-copyright text-center py-3">© 2018 Copyright
                    </div>

                </footer>
            </div>
            <!-- Footer -->
        </footer>
    </div>
</div>
</div>




</body>

</html>