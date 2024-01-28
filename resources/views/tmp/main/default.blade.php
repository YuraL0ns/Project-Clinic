<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<x-header />
    <div class="content">
        @yield('content')
    </div>
<x-callback />
<x-footer/>


<script
    type="text/javascript"
    charset="utf-8"
    async
    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae678f456a02f1511f48524e370b40c702c66a97b7bc6f989486402fbdb3719dd&amp;width=660&amp;height=400&amp;lang=ru_RU&amp;scroll=true&amp;apikey=b848418e-6c82-49a0-9218-471b64dab114&amp;id=mymap"></script>
</body>
</html>
