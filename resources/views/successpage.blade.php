<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Clinic | Doctors</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
        <style>
.table {
   margin: auto;
   width: 50% !important; 
}
        </style>
    </head>
    <body class="bg-light font-sans antialiased">
     @livewire('header')
     <div class="row">
        <div class="col-md-8 p-3 mt-5 d-flex justify-content-center">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <h4>{{ session('message') }}</h4>
                </div>
        </div>
    </div>
    @endif
            <table class="table w-50">
                @if (session()->has('name'))
                <tr>
                    <td>Patient name</td>
                    <td>{{session('name')}}</td>
                </tr>
                @endif
                @if (session()->has('mobile'))
                <tr>
                    <td>Mobile number</td>
                    <td>{{session('mobile')}}</td>
                </tr>
                @endif
                @if (session()->has('time') &&  session()->has('date'))
                <tr>
                    <td>Time slote and date </td>
                    <td>Time between: {{session('time')}}  on {{session('date')}}</td>
                </tr>
                @endif
            </table>
        
    
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
     @livewireScripts
    </body>
</html>