<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        .select2 {
            display: block;
            width: 100%;
        }

        input,
        .select2-container .select2-selection--single,
        .select2-container .select2-selection--multiple {
            height: 44px;
        }

        .select2-container .select2-selection--single,
        .select2-container .select2-selection--multiple {
            border-color: #e5e7eb;
            border-width: 2px;
            padding-top: 8px;
            margin-top: 4px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            top: 90%;
            left: 0;
        }

        .buttons-excel {
            padding-bottom: 0.625rem;
            padding-top: 0.625rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            background-color: rgb(4 108 78/1);
            border-radius: 0.2rem;
            color: #fff;
            font-weight: 700;
        }

        .pagination {
            display: inline-flex;
        }

        .pagination li {
            padding: 8px;
            box-sizing: border-box;
            border-width: .5px;
            border-style: solid;
            border-color: #E5E7EB;
        }       
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div class="bg-white">
            @include('layouts.navigation')
            @include('layouts.navigation-top')
        </div>

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="fixed bottom-0 w-full">
            @include('layouts.navigation-bottom')
        </footer>
    </div>

    @include('sweetalert::alert')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
