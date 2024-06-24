<?php


namespace App\Http\Controllers;



class ProfileController extends Controller


{

    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donal Trump";
        $age = "75";

        // Create the data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = cookie(
            $cookieName,
            $cookieValue,
            $cookieMinutes,
            $cookiePath,
            $cookieDomain,
            $cookieSecure,
            $cookieHttpOnly
        );

        // Return the response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
