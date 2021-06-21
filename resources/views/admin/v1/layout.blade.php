<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Card </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta id="user" content="{{route('User')}}"/>
    <link rel="stylesheet" type="text/css" href="/uikit-3.6.16/css/uikit-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/uikit-3.6.16/css/uikit.min.css"/>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>

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
                                        <li><a href="/admin/get-city"><div class="uk-icon-pencil" uk-icon="pencil"></div> <div> Address</div></a></li>
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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/uikit-3.6.16/js/uikit.min.js"></script>
    <script src="/uikit-3.6.16/js/uikit-icons.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="/DataTables/datatables.min.js"></script>
    <script src="/js/admin-user.sendmess.js"></script>
    <script src="/js/admin-user.updatestatus.js"></script>


    @stack('scripts')
</footer>
</body>

</html>