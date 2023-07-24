<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin">
                        <img src="{{ asset('assets/img/logo.png')}}" />
                    </a>
                </div>
                <span class="logout-spn">
                    <a href="/signout" style="color:#fff;">LOGOUT</a>
                </span>
            </div>
        </div>
        <!-- /. SIDE BAR  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="{{ (request()->is('admin')) ? 'active-link' : '' }}">
                        <a href="{{ url('admin') }}"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li class="{{ (request()->is('admin/ui*')) ? 'active-link' : '' }}">
                        <a href="{{ route('ui') }}"><i class="fa fa-table "></i>UI Elements <span class="badge">Included</span></a>
                    </li>
                    <li class="{{ (request()->is('admin/products*')) ? 'active-link' : '' }}">
                        <a href="{{ route('products') }}"><i class="fa fa-bar-chart-o"></i>Products</a>
                        <div class="dropdown-menu navbar-default navbar-side {{ (request()->is('admin/products*')) ? 'display-contents' : '' }}"aria-labelledby="dropdownMenu1">
                            <div class="sidebar-collapse">
                                <ul class="nav-item">    
                                    <li class="{{ (request()->is('admin/products/product')) ? 'li-active-link' : '' }}"><i class="fa fa-plus-circle "></i> <a href="{{ route('productAdd') }}">Add product</a></li>
                                    <li class="{{ (request()->is('admin/products/trash')) ? 'li-active-link' : '' }}"><i class="fa  fa-trash-o "></i> <a href="{{ route('productsTrash') }}">Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="{{ (request()->is('admin/manufactures*')) ? 'active-link' : '' }}">
                        <a href="{{ route('manufactures') }}"><i class="fa fa-bar-chart-o"></i>Manufactures</a>
                        <div class="dropdown-menu navbar-default navbar-side {{ (request()->is('admin/manufactures*')) ? 'display-contents' : '' }}"aria-labelledby="dropdownMenu1">
                            <div class="sidebar-collapse">
                                <ul class="nav-item">    
                                    <li class="{{ (request()->is('admin/manufactures/manufacture')) ? 'li-active-link' : '' }}"><i class="fa fa-plus-circle "></i> <a href="{{ route('manufactureCreate') }}">Add manufacture</a></li>
                                    <li class="{{ (request()->is('admin/manufactures/trash')) ? 'li-active-link' : '' }}"><i class="fa  fa-trash-o "></i> <a href="{{ route('manufacturesTrash') }}">Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="{{ (request()->is('admin/protypes*')) ? 'active-link' : '' }}">
                        <a href="{{ route('protypes') }}"><i class="fa fa-bar-chart-o"></i>Protypes</a>
                        <div class="dropdown-menu navbar-default navbar-side {{ (request()->is('admin/protypes*')) ? 'display-contents' : '' }}"aria-labelledby="dropdownMenu1">
                            <div class="sidebar-collapse">
                                <ul class="nav-item">    
                                    <li class="{{ (request()->is('admin/protypes/protype')) ? 'li-active-link' : '' }}"><i class="fa fa-plus-circle "></i> <a href="{{ route('protypeCreate') }}">Add protype</a></li>
                                    <li class="{{ (request()->is('admin/protypes/trash')) ? 'li-active-link' : '' }}"><i class="fa  fa-trash-o "></i> <a href="{{ route('protypesTrash') }}">Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="{{ (request()->is('admin/users*')) ? 'active-link' : '' }}">
                        <a href="{{ route('users') }}"><i class="fa fa-bar-chart-o"></i>Users</a>
                        <div class="dropdown-menu navbar-default navbar-side {{ (request()->is('admin/users*')) ? 'display-contents' : '' }}"aria-labelledby="dropdownMenu1">
                            <div class="sidebar-collapse">
                                <ul class="nav-item">    
                                    <li class="{{ (request()->is('admin/users/user')) ? 'li-active-link' : '' }}"><i class="fa fa-plus-circle "></i> <a href="{{ route('userCreate') }}">Add user</a></li>
                                    <li class="{{ (request()->is('admin/users/trash')) ? 'li-active-link' : '' }}"><i class="fa  fa-trash-o "></i> <a href="{{ route('usersTrash') }}">Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('billsShow') }}"><i class="fa fa-edit "></i>Bills Page</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. CONTENTS  -->
        @yield('content')
        <!-- /. PAGE WRAPPER  -->
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com
                | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                | Edited by: <a href="https://www.facebook.com/profile.php?id=100030007710928" style="color:#fff;" target="_blank">Hiroe
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>