<?php

class AuthController
{
    public function login($request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $request->email, 'password' => $request->password),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        $response = json_decode($response);
        
        if(!$response->code == 2)
        {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }

    public function logout()
    {
        return null;
    }

    public function register()
    {
        return null;
    }
}
