<?php

namespace App\Http\Middleware;

use Closure;
use Str;
use Illuminate\Http\Request;

class visitor_log
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
        public function handle($request, Closure $next) {
                if(!isset($_COOKIE['ConnectoID'])){
                    $user_cookie= Str::random(32) . '-' . rand(0, 10000);
                    $user_cookie =setCookie("ConnectoID", $user_cookie,time() + (20 * 365 * 24 * 60 * 60));     
                }else{
                    $user_cookie=$_COOKIE['ConnectoID'];
                }
                $start = microtime(true);
                $log = \App\Models\visitor::firstOrNew(['cookie' => $user_cookie]);
                $log->ip = $request->ip();
                $log->method = $request->method();
                $log->path = $request->path();
                $log->user_agent = $request->userAgent();
                $log->save();
        
                $newlog = new \App\Models\visitor_log;
                $newlog->ip = $request->ip();
                $newlog->userAgent = $request->userAgent();
                $newlog->method = $request->method();
                $newlog->path = $request->path();
                $newlog->cookie_id = $log->id;
                $newlog->parameters = json_encode($request->all());
                $response = $next($request);
                $end = microtime(true);
                $newlog->response_code = $response->getStatusCode();
                $newlog->response_after = $end - $start;
                $newlog->save();
                return $response;
        }
}
