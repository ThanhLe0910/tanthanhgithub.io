<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Card </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/uikit-3.6.16/css/uikit-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/uikit-3.6.16/css/uikit.min.css"/>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="zuno-cms wraper-header">
            <div class="wrapper-main-menu uk-background-muted">
                <div class="uk-container">
                    <div class="cms-main-menu primary-menu" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">

                        <nav class="uk-navbar-container">
                            <div class="uk-container uk-container-expand">
                                <div uk-navbar>

                                    <ul class="uk-navbar-nav">
                                        <li class="uk-active"><a href="/admin/dashboard"><div class="uk-icon-home" uk-icon="home"></div> <div> Smart Card</div></a></li>
                                        <li>
                                            <a href="#"><div class="uk-icon-grid" uk-icon="grid"></div> <div> My menu</div></a>
                                            <div class="uk-navbar-dropdown">
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="#">Change password</a></li>
                                                    <li><a href="#">Account setting</a></li>
                                                    <li><a href="{{route('Logout')}}">Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="/admin/user"><div class="uk-icon-pencil" uk-icon="pencil"></div> <div> User</div></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- main -->
        @yield('content')
        <!-- end main -->
        <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/uikit-3.6.16/js/uikit.min.js"></script>
    <script src="/uikit-3.6.16/js/uikit-icons.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="/DataTables/datatables.min.js"></script>
    @stack('scripts')
</footer>
</body>

</html>