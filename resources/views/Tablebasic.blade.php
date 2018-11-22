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
                    
                    <h3 class="menu-title"><center>Table_basic</center></h3><!-- /.menu-title -->
                    
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
                  <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i></li>
                  </ul>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
<div class="col-sm-7">
<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
 <div class="header-left">
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu"> </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Table_Basic</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h1><center>electricity and water</center><h1></strong>
                        </div>
					
						   <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                   <th scope="col"></th>
                                  <th scope="col">ew_code</th>
                                  <th scope="col">date_of_print</th>
                                  <th scope="col">number_electricity</th>
                                  <th scope="col">number_water</th>
                                  <th scope="col">room_code</th>
								
                                </tr>
                              </thead>
                              <tbody>


                                @foreach ($new_electricity_water as $new)
                                 
                               <tr>    
                                    <td></td>             
                                   <td>{{$new->ew_code}}</td>
                                  <td>{{$new->date_of_print}}</td>
                                  <td>{{$new->number_electricty}}</td>
                                  <td>{{$new->number_water}}</td>
                                  <td>{{$new->room_code}}</td>
                                </tr>

                               @endforeach()
                                    


                                
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>


              

                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h1><center>Customer</center><h1></strong>
                        </div>
                        
						  <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">customer_code</th>
                                  <th scope="col">customer_name</th>
                                  <th scope="col">room_code</th>
                                  <th scope="col">phone_number</th>
								                  <th scope="col">customer_address</th>
                                  <th scope="col">gender</th>
                                  <th scope="col">date_of_birth</th>
								                  <th scope="col">day_of_rent</th>
                                  <th scope="col">indentification_card</th>
                                  <th scope="col">username</th>
								                 
                                 
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($new_customer as $new1)
                                 
                               <tr>
                                  
                                  <td>{{$new1->customer_code}}</td>
                                  <td>{{$new1->customer_name}}</td>
                                  <td>{{$new1->room_code}}</td>
                                  <td>{{$new1->phone_number}}</td>
                                  <td>{{$new1->customer_address}}</td>
                                  <td>{{$new1->gender}}</td>
                                  <td>{{$new1->date_of_birth}}</td>
                                  <td>{{$new1->day_of_rent}}</td>
                                  <td>{{$new1->identification_card}}</td>
                                  <td>{{$new1->username}}</td>
                                  
                                </tr>

                               @endforeach()
                                    

                               
                              </tbody>
                            </table>

                        </div>
						
                    </div>
                </div>
                </div>              
                    
                </div>
                        

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h1><center>Unit</center><h1></strong>
                        </div>
						
					 <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  
                                  <th scope="col">electricity_payment</th>
                                  <th scope="col">water_payment</th>
                                  
                                </tr>
                              </thead>
                              <tbody>

                              @foreach ($new_unit as $new1)
                                 
                               <tr>
                               
                                  <td>{{$new1->electricity_payment}}</td>
                                  <td>{{$new1->water_payment}}</td>
             
                                </tr>

                               @endforeach()
                           
                             
                                
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h1><center>Account</center><h1> </strong>
                        </div>
                        <div class="card-body">

                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                              
                                  <th scope="col">Username</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">quyền</th>
                                </tr>
                              </thead>
                              <tbody>


                               @foreach ($new_account as $new)
                                 
                               <tr>
                                
                                  <td>{{$new->name}}</td>
                                  <td>{{$new->password}}</td>
                                  <td>{{$new->account_type}}</td>
                                </tr>

                               @endforeach()
                                    
                                
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h1><center>Bill</center><h1></strong>
                        </div>
                       <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                
                                  <th scope="col">bill_code</th>
                                  <th scope="col">total_electricity</th>
                                  <th scope="col">totals_water</th>
								                  <th scope="col">date_of_print</th>
								                  <th scope="col">customer_code</th>
                                </tr>
                              </thead>

                              <tbody>

                                @foreach ($new_bill as $new)
                                 
                               <tr>
                             
                                  <td>{{$new->bill_code}}</td>
                                  <td>{{$new->total_electricity}}</td>
                                  <td>{{$new->total_water}}</td>
                                  <td>{{$new->date_of_print}}</td>
                                  <td>{{$new->customer_code}}</td>
                                  
                                </tr>

                               @endforeach()
                                    

                               
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>






                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-header"><strong><h1><center>configuration </center><h1></strong><br>
                        </div>
                         <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                 
                                  <th scope="col">configuration_code</th>
                                  <th scope="col">update_cycle</th>
                                  <th scope="col">json</th>
                									
                                </tr>
                              </thead>
                              <tbody>


                                @foreach ($new_configuration as $new)
                                 
                               <tr>
                               
                                  <td>{{$new->configuration_code}}</td>
                                  <td>{{$new->update_cycle}}</td>
                                  <td>{{$new->json}}</td>
                               
                                </tr>

                               @endforeach()
                                    
                              

                                </tr>
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>
<!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>



</body>

</html>
