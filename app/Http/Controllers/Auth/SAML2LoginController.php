<?php

namespace App\Http\Controllers\Auth;

use Aacotroneo\Saml2\Http\Controllers\Saml2Controller;
class SAML2LoginController extends Saml2Controller
{
    public function loginx()
    {
        $loginRedirect = 'https://localhost'; // Determine redirect URL
        $this->saml2Auth->login($loginRedirect);
        return null;
    }
}
