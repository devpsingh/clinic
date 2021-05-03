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



.text-container {
  position: absolute;
  right: 0;
  margin-right: 40px;
  margin-top: 45px;
  max-width: 230px;
  text-align: center;
}

.title-text {
  color: #263238;
  font-size: 28px;
  font-weight: 600;
  margin-top: 5px;
}

.info-text {
  margin-top: 10px;
  font-siize: 18px;
}

.desc-text {
  font-size: 14px;
  margin-top: 10px;
}
        </style>
    </head>
    <body class="bg-light font-sans antialiased">
     @livewire('header')
     @livewire('doctor')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
     @livewireScripts
    </body>
</html>