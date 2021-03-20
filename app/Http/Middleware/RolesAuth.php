<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthenticatedException;
use App\Exceptions\UnauthorizedException;
use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use App\Models\Role;

class RolesAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
throw_if(!auth()->check(), UnauthenticatedException::notLoggedIn());
// get user role permissions
$role = Role::findOrFail(auth()->user()->role_id);
$permissions = $role->permissions;// get requested action
$actionName = class_basename($request->route()->getActionname());// check if requested action is in permissions list
foreach ($permissions as $permission)
{
 $_namespaces_chunks = explode('\\', $permission->controller);
 $controller = end($_namespaces_chunks);
 if ($actionName == $controller . '@' . $permission->method)
 {
   // authorized request
   return $next($request);
 }
}// none authorized request
return response('Unauthorized Action', 403);
    }
}
