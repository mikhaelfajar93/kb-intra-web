<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class CheckSessionTimeout
{
    protected $session;
    protected $timeout = 1800; // 30 menit dalam detik

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle($request, Closure $next)
    {
        $isLoggedIn = Auth::check();
        $lastActivityTime = $this->session->get('last_activity_time');

        if ($isLoggedIn && $lastActivityTime && time() - $lastActivityTime > $this->timeout) {
            Auth::logout();
            $this->session->flush();
            return redirect('/')->with('message', 'Sesi Anda telah berakhir. Silakan login kembali.');
        }

        $this->session->put('last_activity_time', time());

        return $next($request);
    }
}
