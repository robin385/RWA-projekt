<!doctype html>
<head>
    <script defer src="/js/manifest.js"></script>
    <script defer src="/js/vendor.js"></script>
    <script defer src="/js/app.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div class="mt-8 md:mt-0 col-span-10">
                <a href="/"  class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Home Page</a>  
        </div>
        @auth
            <span class="text-xs font-bold uppercase mr-16">Welcome {{ auth()->user()->name }}!</span>

            <form method="Post" action="/logout" class="text-s font-semibold ml-6 bg-blue-500 rounded-full text-white py-2 px-3">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        @endauth
        
    </nav>
    {{ $slot }}
</section>
<div class ="content">
    <div id="dutylist" class="title m-b-mb">
    </div>
</div>

<script type="text/javascript" src="js/app.js"></script>
</body>
