<!-- Left Sidebar  -->
<?php
    use App\Role;
    $role = new Role();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/css/helper.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
@include("provider.create")
@include("provider.edit")
<body>
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    @if(App\Role::isAdmin())
                        <li><a href="/car"><i class="notika-icon notika-house"></i> Car</a></li>
                        <li><a href="/client"><i class="notika-icon notika-mail"></i> Client</a></li>
                        <li><a href="/contracts"><i class="notika-icon notika-edit"></i> Contracts</a></li>
                        <li><a href="/employee"><i class="notika-icon notika-edit"></i> Employee</a></li>
                        <li><a href="/provider"><i class="notika-icon notika-bar-chart"></i> Provider</a></li>
                    @endif
                        @if(App\Role::isManager())
                            <li><a href="/car"><i class="notika-icon notika-house"></i> Car</a></li>
                            <li><a href="/client"><i class="notika-icon notika-mail"></i> Client</a></li>
                            <li><a href="/contracts"><i class="notika-icon notika-edit"></i> Contracts</a></li>
                        @endif
                        @if(App\Role::isClient())
                            <li><a href="/car"><i class="notika-icon notika-house"></i> Car</a></li>
                        @endif
                    <li>
                        <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><h2>Provider</h2></a>
                    <div class="row justify-content-between">
                        <button type="button" class="btn btn-warning add-new" data-toggle="modal" data-target="#myModal" title="Create"><i class="fa fa-plus" ></i> Add New</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>
</div>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Provider</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                            <tr>
                                <td>№</td>
                                <td>Full name</td>
                                <td>Company name</td>
                                <td>Telephone number</td>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <td>№</td>
                                <td>Full name</td>
                                <td>Company name</td>
                                <td>Telephone number</td>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($provider as $index => $c)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $c->full_name_of_provider }}</td>
                                    <td>{{ $c->company_name}}</td>
                                    <td>{{ $c->telephone_number}}</td>
                                    <td>
                                        <div class="row sweetalert justify-content-center">
                                            <div>
                                                <button class="edit-arrival" data-toggle="modal" data-target="#edit-arrival{{$c['provider_id']}}" title="Edit" type="button" style="border: 0; background:0">
                                                    <span class="material-icons">&#xe8ff;</span>
                                                </button>
                                            </div>
                                            <div>
                                                <form method="POST"
                                                      action="{{route('provider.delete', ['provider' => $c['provider_id']])}}"> @csrf
                                                    <button title="Delete" data-toggle="tooltip" type="submit" name = "provider" id="provider" style="border: 0; background:0">
                                                        <span class="material-icons">&#xe92b;</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018
                        . All rights reserved. Template by <a href="#">Julia</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/lib/bootstrap/js/popper.min.js"></script>
<script src="/js/jquery.slimscroll.js"></script>
<script src="/js/sidebarmenu.js"></script>
<script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="/js/custom.min.js"></script>
<script src="/js/lib/morris-chart/raphael-min.js"></script>
<script src="/js/lib/morris-chart/morris.js"></script>
<script src="/js/lib/morris-chart/dashboard1-init.js"></script>
<script src="/js/lib/calendar-2/moment.latest.min.js"></script>
<script src="/js/lib/calendar-2/prism.min.js"></script>
<script src="/js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="/js/lib/calendar-2/pignose.init.js"></script>
<script src="/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="/js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/lib/sweetalert/sweetalert.min.js"></script>
<script src="/js/lib/sweetalert/sweetalert.init.js"></script>
<script src="/js/custom.min.js"></script>
<script src="/js/lib/datatables/datatables.min.js"></script>
<script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="/js/lib/datatables/datatables-init.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-price-slider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/meanmenu/jquery.meanmenu.js"></script>
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/flot-active.js"></script>
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/jquery.appear.js"></script>
<script src="js/knob/knob-active.js"></script>
<script src="js/chat/jquery.chat.js"></script>
<script src="js/todo/jquery.todo.js"></script>
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<script src="js/plugins.js"></script>
<script src="js/data-table/jquery.dataTables.min.js"></script>
<script src="js/data-table/data-table-act.js"></script>
<script src="js/main.js"></script>
<script src="js/tawk-chat.js"></script>
</body>
</html>