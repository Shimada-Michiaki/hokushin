<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        Log::info('User retrieved', ['user' => $user]);

        try {
            $roles = $user->getRoleNames(); // ロール名を取得
            Log::info('User roles', ['roles' => $roles]);
            session(['user_roles' => $roles]); // ロールをセッションに保存

            if ($user->hasRole('社内管理者')) {
                Log::info('Redirecting to admin menu');
                return redirect()->route('admin.menu');
            } elseif ($user->hasRole(['事務員', '製造', '外注', '出荷'])) {
                Log::info('Redirecting to user menu');
                return redirect()->route('user.menu');
            } elseif ($user->hasRole('アプリ保守管理者')) {
                Log::info('Redirecting to special menu');
                return redirect()->route('special.menu');
            } else {
                Log::info('No matching roles found');
                return redirect()->route('dashboard')->with('user', $user);
            }
        } catch (\Exception $e) {
            Log::error('Error checking roles or redirecting', ['error' => $e->getMessage()]);
            return response()->view('errors.custom', [], 500);
        }
    }
}
