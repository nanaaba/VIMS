<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {

    public function showusers() {


        return view('users');
    }

    public function showchangepassword() {

        return view('changepassword');
    }

    public function getUsers() {


        return '{
    "status": 0,
    "message": "success",
    "data": [
        {
            "id": "2",
            "name": "Alex sowah",
            "password": "e10adc3949ba59abbe56e057f20f883e",
            "email": "alex@gmail.com",
            "addedby": "1",
            "datecreated": "2017-10-11 15:30:58",
            "lastlogin": "2017-11-27 04:37:51",
            "role": "Administrator",
            "contact": "0271892232",
            "active": "0",
            "region": null,
            "region_name": null
        },
        {
            "id": "18",
            "name": "Mathias Kofi Bassaw",
            "password": "c87d4fc2c4d058fbb60aa39e6caddc03",
            "email": "matkofbass@gmail.com",
            "addedby": "2",
            "datecreated": "2017-10-25 16:58:56",
            "lastlogin": "2017-10-26 11:00:03",
            "role": "Administrator",
            "contact": "0266504723",
            "active": "0",
            "region": "0",
            "region_name": null
        },
        {
            "id": "36",
            "name": "Libabatu Mohammed Jumai",
            "password": "d18a13db3fd4be41fb1a3735cfc834da",
            "email": "tyralibmoh@yahoo.com",
            "addedby": "2",
            "datecreated": "2017-11-22 14:26:40",
            "lastlogin": "2017-11-22 03:58:46",
            "role": "Supervisor",
            "contact": "0244752545",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "20",
            "name": "Emmanuel Kofi Bassaw",
            "password": "bf0536def1facec7660fe1b60bc744cc",
            "email": "matkofbass@yahoo.com",
            "addedby": "18",
            "datecreated": "2017-10-25 17:21:25",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "0266504723",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "17",
            "name": "Nana Aba Odum",
            "password": "e10adc3949ba59abbe56e057f20f883e",
            "email": "abaodum@yahoo.com",
            "addedby": "2",
            "datecreated": "2017-10-25 16:56:09",
            "lastlogin": "2017-11-22 04:36:16",
            "role": "Administrator",
            "contact": "0265257177",
            "active": "0",
            "region": "0",
            "region_name": null
        },
        {
            "id": "23",
            "name": "Michael Plange",
            "password": "bab09320d4144cfd968713ad45f83c5f",
            "email": "mickypet3030@gmail.com",
            "addedby": "2",
            "datecreated": "2017-11-20 12:03:19",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "0246421754",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "35",
            "name": "Foster Gyimah",
            "password": "b2da367bbdf0d67a1d0f8726a14a717b",
            "email": "fosmah@yahoo.com",
            "addedby": "2",
            "datecreated": "2017-11-21 13:22:00",
            "lastlogin": "2017-11-21 03:48:06",
            "role": "Supervisor",
            "contact": "0245296287",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "38",
            "name": "emilia ocloo",
            "password": "6c749e01b15c46f49a7269a867fd7c7a",
            "email": "emiliaocloo2017@gmail.com",
            "addedby": "2",
            "datecreated": "2017-11-23 15:03:04",
            "lastlogin": "2017-11-23 03:32:44",
            "role": "Supervisor",
            "contact": "0244045806",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "37",
            "name": "Emelia Ocloo 2",
            "password": "583d5b3d114d30c08a1d1119bc99f465",
            "email": "emeliaocloo2017@gmail.com",
            "addedby": "2",
            "datecreated": "2017-11-23 15:00:16",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "0244045806",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "34",
            "name": "emelia ocloo",
            "password": "5d3738d0a3cf0eceace150df028a700b",
            "email": "emelia.ocloo@yahoo.com",
            "addedby": "2",
            "datecreated": "2017-11-20 15:16:04",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "0244045806",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        },
        {
            "id": "32",
            "name": "Ama Odum",
            "password": "0bbb44deb4b6faa2005ed4b121d90a1a",
            "email": "abaodum@gmail.com",
            "addedby": "17",
            "datecreated": "2017-11-20 13:13:21",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "0265257177",
            "active": "0",
            "region": "3",
            "region_name": "Central Region"
        },
        {
            "id": "31",
            "name": "Michael Plange",
            "password": "a6f3e966e52921dc8a20763be9268453",
            "email": "M.plange@et.com.gh",
            "addedby": "2",
            "datecreated": "2017-11-20 13:13:00",
            "lastlogin": null,
            "role": "Supervisor",
            "contact": "+233246421754",
            "active": "0",
            "region": "1",
            "region_name": "Greater Accra Region"
        }
    ]
}';



        $url = config('constants.TEST_URL');

        $baseurl = $url . '/users';

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();
            //$bodyObj = json_decode($body);

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function saveUser(Request $request) {



        return '{
    "status": 0,
    "message": "success"
}';
        $url = config('constants.TEST_URL');
        $baseurl = $url . '/user';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);


        $dataArray = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'contact' => $request['contact'],
            'role' => $request['role'],
            'addedby' => session('userid')
        );


        try {

            $response = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $response->getBody();

//            if ($response->getStatusCode() == 200) {
//
//                return $body;
//            }
            return $body;
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function updateUser(Request $request) {

        return '{
    "status": 0,
    "message": "success"
}';
        $url = config('constants.TEST_URL');
        $baseurl = $url . '/users';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);

        $dataArray = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'contact' => $request['contact'],
            'role' => $request['role'],
            'userid' => $request['userid'],
            'region' => $request['region']
        );

        try {

            $response = $client->request('PUT', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $response->getBody();

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function deleteUser($userid) {

        return '{
    "status": 0,
    "message": "success"
}';
        $url = config('constants.TEST_URL');

        $baseurl = $url . '/users/' . $userid;

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('DELETE', $baseurl);

            $body = $response->getBody();

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function userDetail($userid) {

        return '{
    "status": 0,
    "message": "success",
    "data": [
        {
            "id": "18",
            "name": "Mathias Kofi Bassaw",
            "password": "c87d4fc2c4d058fbb60aa39e6caddc03",
            "email": "matkofbass@gmail.com",
            "addedby": "2",
            "datecreated": "2017-10-25 16:58:56",
            "lastlogin": "2017-10-26 11:00:03",
            "role": "Administrator",
            "contact": "0266504723",
            "active": "0",
            "region": "0"
        }
    ]
}';

        $url = config('constants.TEST_URL');

        $baseurl = $url . '/users/' . $userid;

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();
            //$bodyObj = json_decode($body);

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function changePassword(Request $request) {

        $password = $request['password'];

        $url = config('constants.TEST_URL');
        $baseurl = $url . '/changepassword';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token'),
                'code' => $password
            ],
            'http_errors' => false
        ]);




        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function resetPassword($userid) {
        return '{
    "status": 0,
    "message": "success"
}';
    }

    public function getAuditLogs() {


        $url = config('constants.TEST_URL');

        $baseurl = $url . '/users';

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();
            //$bodyObj = json_decode($body);

            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

}
