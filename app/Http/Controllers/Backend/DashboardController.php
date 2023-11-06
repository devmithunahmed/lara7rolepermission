<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function index()
    {
        if (is_null($this->user) || !$this->user->can('admin.view')) {
            abort(403, 'Unauthorized Access');
        }

        $total_roles = count(Role::select('id')->get());
        $total_admins = count(Admin::select('id')->get());
        $total_permissions = count(Permission::select('id')->get());
        $total_users = count(User::select('id')->get());
        return view('backend.pages.dashboard.index', compact('total_roles', 'total_admins', 'total_permissions', 'total_users'));
    }
}
