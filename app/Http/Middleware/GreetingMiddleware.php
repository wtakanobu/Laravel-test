<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Config;
use Illuminate\Contracts\View\Factory as ViewFactory;



class GreetingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    
    public function __construct(ViewFactory $view)
    {
         $this->view = $view;
    }
    
    public function handle(Request $request, Closure $next)
    {
        // Before ミドルウェアはここに記述
        
         $timestamp = $request->server('REQUEST_TIME');
         $hour = Carbon::createFromTimeStamp($timestamp, Config::get('app.timezone'))->hour;
         $message = 'こんばんは';
         if (in_array($hour, range(5, 9))) {
         $message = 'おはよう';
         } else if (in_array($hour, range(10, 17))) {
         $message = 'こんにちは';
         }
         $this->view->share('greetingMessage', $message);
         
         return $next($request);
        // After ミドルウェアはここ

    }
    
}
