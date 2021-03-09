<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="@yield('icon-l') bg-c-blue"></i>
                <div class="d-inline">
                    <h5>@yield('title-2')</h5>
                    <span>@yield('describ')</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.index') }}"><i class="@yield('icon-r')"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="@yield('link')">@yield('title-3')</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>