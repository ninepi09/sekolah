<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    {{-- meta --}}
    @include('components._meta')
</head>

<body>
    {{-- [ Pre-loader ] start --}}
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- [ Header ] start --}}
            @include('components._nav-orangtua')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- [ navigation menu ] start --}}
                    @include('components._sidebar-orangtua')

                    <div class="pcoded-content">
                        {{-- [ breadcrumb ] start --}}
                        @include('components._bread-orangtua')

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        {{-- [ page content ] start --}}
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Script --}}
    @include('components._script')
</body>
</html>
