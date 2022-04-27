<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        
        // ...
        //$this->content = $accessDeniedException;
        //dd($this->content);
        //throw new AccessDeniedException('Need ROLE_ADMIN!');
        return new Response("<h1>Access Denied. Please contact with administrator!</h1>", 403);
    }
}