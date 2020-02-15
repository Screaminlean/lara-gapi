<?php

namespace Screaminlean\LaraGapi\Http\Controllers;

use Google_Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaraGapiController extends Controller
{
    /**
    * @var \Google_Client
    */
    protected $client;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // create an instance of the google client for OAuth2
        $this->client = new Google_Client();
                // set application name
        $this->client->setApplicationName(Config::get('lara-gapi.application_name'));

        // set oauth2 configs
        $this->client->setClientId(Config::get('lara-gapi.client_id'));
        $this->client->setClientSecret(Config::get('lara-gapi.client_secret'));
        $this->client->setRedirectUri(Config::get('lara-gapi.redirect_uri'));
        $this->client->setScopes(Config::get('lara-gapi.scopes'));
        $this->client->setAccessType(Config::get('lara-gapi.access_type'));
        $this->client->setApprovalPrompt(Config::get('lara-gapi.approval_prompt'));

        // set developer key
        $this->client->setDeveloperKey(Config::get('lara-gapi.developer_key'));

    }

    /**
    *
    * Redirect browser to Google login
    *
    * @return      array
    *
    */
    public function redirectTo() {

        //$google_client->createAuthUrl()
        return redirect()->away('https://www.google.com');
    }

    public function handleCallback() {

        return null;
    }

    public function logout() {


    }
}
