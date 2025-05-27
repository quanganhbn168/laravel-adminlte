<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', config('app.name'))</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('css')
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary sidebar-open app-loaded">
    <div class="app-wrapper">

        @include('partials.admin.navbar')
        @include('partials.admin.sidebar')

        <main class="app-main">
            <div class="app-content-header">
              <!--begin::Container-->
                <div class="container-fluid">
                <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6"><h3 class="mb-0">@yield('content_header')</h3></div>
                        <div class="col-sm-6">
                            @include('components.breadcrumb')
                        </div>
                    </div>
          <!--end::Row-->
                </div>
      <!--end::Container-->
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('partials.admin.footer')
    </div>
    @stack('js')
</body>
</html>
