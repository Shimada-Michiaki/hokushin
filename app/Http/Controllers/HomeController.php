<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        Log::info('User retrieved', ['user' => $user]);

        try {
            $roles = $user->getRoleNames(); // ロール名を取得
            Log::info('User roles', ['roles' => $roles]);

            if ($user->hasRole('社内管理者')) {
                Log::info('Redirecting to admin menu');
                return redirect()->route('admin.menu');
            } elseif ($user->hasRole('事務員')) {
                Log::info('Redirecting to user menu');
                return redirect()->route('user.menu');
            } else {
                Log::info('No matching roles found');
            }
        } catch (\Exception $e) {
            Log::error('Error checking roles or redirecting', ['error' => $e->getMessage()]);
            return response()->view('errors.custom', [], 500);
        }

        return view('dashboard');
    }
}
