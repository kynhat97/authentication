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

    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
          <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                    
                  <h3 class="menu-title">Bill</h3><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>


                        <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-table"></i><a href="{{url('Tablebasic')}}">tables-basic</a></li>

                            <li><i class="fa fa-table"></i><a href="{{url('tabledata')}}">Bill</a></li>

                             <li><i class="menu-icon fa fa-th"></i><a href="{{asset('CreateAccount')}}">Create_Account</a></li>
                             
                        </ul>
                    </li>

                    <!-- /.menu-title -->

                    <!-- /.menu-title -->
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
</div>

        </header><!-- /header -->
        <!-- Header-->
        
      <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>BILL</h1>
                    </div>
                </div>
            </div>
      </div>
<div class="box">
  <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      
      
      
      
      
      <input type="search" class="timkiem" id="search" placeholder="MaPhong..." />
      <button type="submit" class="btn btn-success btn-sm">Submit</button>
      
      
      
      
      

      
        
<div>
        
<div class="col-lg-6">
          <div class="card">
              <div class="card-header"><small> </small></div>
                       <div class="card-body card-block">

                          <div class="form-group"><label for="country" class=" form-control-label">bill_code</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>

                        <div class="form-group"><label for="company" class=" form-control-label">Total_electricity</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Total_water</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
                          
                        <div class="form-group"><label for="street" class=" form-control-label">date_of_print</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                          
                          
                        <div class="form-group"><label for="country" class=" form-control-label">customer_code</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
                          
                        <div class="form-group"><label for="country" class=" form-control-label">phone_number</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>  
                        
                        <div class="form-group"><label for="country" class=" form-control-label">room_code</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
                        
                        
                        
                          
                        <div class="form-actions form-group"></div>
                          
                          
                          
                      </div>
        </div>

                </div>
<div class="col-lg-6">
  <div class="card">
    <div class="card-header"><small> </small></div>
    <div class="card-body card-block">
      <div class="form-group">
        <label for="company3" class=" form-control-label">customer_name</label>
        <input type="text" id="company3" placeholder="Enter your company name" class="form-control">
      </div>
      <div class="form-group">
        <label for="vat" class=" form-control-label">customer_address</label>
        <input type="text" id="vat" placeholder="DE1234567890" class="form-control">
      </div>
      <div class="form-group">
        <label for="street" class=" form-control-label">gender</label>
        <input type="text" id="street" placeholder="Enter street name" class="form-control">
      </div>
      <div class="form-group">
        <label for="country" class=" form-control-label">date_of_birth</label>
        <input type="text" id="country" placeholder="Country name" class="form-control">
      </div>
      <div class="form-group">
        <label for="country" class=" form-control-label">date_of_rent</label>
        <input type="text" id="country" placeholder="Country name" class="form-control">
      </div>
      <div class="form-group">
        <label for="country" class=" form-control-label">username</label>
        <input type="text" id="country" placeholder="Country name" class="form-control">
      </div>
      <div class="form-group">
        <label for="country" class=" form-control-label">indentification</label>
        <input type="text" id="country" placeholder="Country name" class="form-control">
      </div>
      <div class="form-actions form-group"></div>
    </div>
  </div>
</div>
<div><center>
    <button type="submit" class="btn btn-success btn-sm">Save</button>
    <button type="submit" class="btn btn-success btn-sm">delete</button>
    <button type="submit" class="btn btn-success btn-sm">output</button>
    <button type="submit" class="btn btn-success btn-sm">update</button>
    
    
    </center></div>
</div> </div>
<div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">

            

               
             

</div><!-- .animated -->
</div><!-- .content -->


   
    <!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


   

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
