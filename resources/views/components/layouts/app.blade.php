@props(['title' => 'BLOOD CARE DIAGNOSTIC CENTRE - 24/7 Pathology Lab Lucknow'])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="BLOOD CARE DIAGNOSTIC CENTRE - 24/7 Pathology Lab in Lucknow. Blood Test, CBC, Thyroid, Full Body Checkup. Google Rating 5.0" />
    <meta name="theme-color" content="#dc3545" />
    <link rel="manifest" href="{{ asset('manifest.json') }}" />
    <link rel="apple-touch-icon" href="{{ asset('images/icon-192.png') }}" />
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') . '?v=' }}{{ rand(0, 5) }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    @stack('styles')
</head>

<body>
    <x-page-loader />
    <x-header />
    {{ $slot }}
    <x-whatsapp-button />
    <x-footer />
    <script src="js/main.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js');
        }
    </script>
    @stack('scripts')
</body>

</html>
