<?php

class UserController
{
    public function index($request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $request->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if(!$response->code == 4)
        {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }

    public function getUser($request)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/' . $request->id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $request->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if (!$response->code == 4) {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }

    public function createUser($request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $request->name, 'lastname' => $request->lastname, 'email' => $request->email, 'phone_number' => $request->phone_number, 'created_by' => $request->created_by, 'role' => 'Administrador', 'password' => $request->password, 'profile_photo_file' => new CURLFILE($request->profile_photo_file)),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $request->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if (!$request->code === 4) {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }

    public function updateUser($request)
    {
        $curl = curl_init();

        if (!empty($request->urlImg)) {
            $imgResponse = $this->updateImgUser($request); 
        }

        $data = array(
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'id' => $request->id,
        );

        $dataEncode = http_build_query($data);

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $dataEncode,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $request->token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response);

        if (empty($response) || $response->code !== 4) {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }

    public function updateImgUser($request)
    {
        if (empty($request->urlImg) || !file_exists($request->urlImg)) {
            return (object)["code" => -1, "message" => "La imagen no es válida"];
        }

        $curl = curl_init();

        $data = array(
            'id' => $request->id,
            'profile_photo_file' => new CURLFILE($request->urlImg),  
        );

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/avatar',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,  
            CURLOPT_HTTPHEADER => array(
                'Content-Type: multipart/form-data',  
                'Authorization: Bearer ' . $request->token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response);

        if (empty($response) || $response->code !== 4) {
            return (object)["code" => -1, "message" => "Error inesperado"];
        }

        return $response;
    }


    public function deleteUser($request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/' . $request->id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $request->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if (!$response->code === 2) {
            return (object)['code' => -1, 'message' => 'Error inesperado'];
        }

        return $response;
    }
}
