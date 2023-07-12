<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Project</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    @include('FrontEnd.includes.style')
</head>

<body class="d-flex flex-column h-100">



    <main class="flex-shrink-0">


        <!-- Navigation-->
        @include('FrontEnd.includes.navbar')



        <!-- Content---->
        @yield('content')



    </main>

    @include('FrontEnd.includes.footer')






    @include('FrontEnd.includes.script')
    
</body>

</html>
