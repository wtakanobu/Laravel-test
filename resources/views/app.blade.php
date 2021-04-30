<html>
     <head>
         <title>アプリ名 - @yield('title')</title>
     </head>
     <body>
         <span>
         {{ $greetingMessage }}
         @if (Auth::guest())
             ゲストさん
         @else
             {{ Auth::user()->name }}さん
         @endif
         </span>
         
         @section('sidebar')
         <!--ここがメインのサイドバー-->
         @show
         
         <div class="container">
             @yield('content')
         </div>
     </body>
</html>