<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
          <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                    
                    <!-- /.menu-title -->
                    

                     <h3 class="menu-title">Create_Account</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('Tablebasic')}}">tables-basic</a></li>

                            <li><i class="fa fa-table"></i><a href="{{url('tabledata')}}">Bill</a></li>

                             <li><i class="menu-icon fa fa-th"></i><a href="{{asset('CreateAccount')}}">Create_Account</a></li>
                        </ul>




                    </li>
                    <li class="menu-item-has-children active dropdown"></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
<div class="form-inline">
            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="user-menu dropdown-menu"></div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Create_Account</h1>
                    </div>
                </div>
            </div>
</div>

        <div class="content mt-3">
            <div class="animated fadeIn">


              <div class="row"> <!--/.col-->

                  <div class="col-lg-6">
                    <div class="card">
				  <!--tao trang-->
                      </div>
                    </div>
                  </div>
<div class="col-lg-6">
          <div class="card">
			  <div class="card-header"><strong>dăng kí tai khoan</strong><small> </small></div>
                      <div class="card-body card-block">
			<div class="card-body card-block">


                 
              <form action="{{ URL::action('PageController@store_account')}}" method="POST" >

                @if(Session::has('successfully '))
                <div class="alert alert-success">{{Session::get('successfully ')}}</div>
                <input type="hidden" name="token"value="{{ csrf_token() }}">
                @endif 

                
                {{ csrf_field() }}
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="name" name="name" placeholder="name" class="form-control">
                            </div>
                          </div>
				  
				  			 <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="password" class="form-control" placeholder="Password">


                            </div>
                          </div>
				  
				  
                          <div class="form-group">
                            <div class="input-group">
								 <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="account_type" id="account_type" name="account_type" placeholder="access permissions" class="form-control">
                            </div>
                          </div>

                          
				  <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>




						  
</form>
                      </div>
                    </div>
        </div>

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

     <script src="{{asset('js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
