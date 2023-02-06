<?php
 
namespace App\Http\Controllers;

use Faker\Factory as FakerFactory;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Auth\UserRecord;
use Kreait\Firebase\auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

// https://firebase.google.com/docs/database/unity/retrieve-data

// reference = https://www.youtube.com/watch?v=NKbvnOy5_wg&t=92s
//             https://github.com/naufalist/larabase/blob/master/FirebaseController.php -->

class FirebaseController extends Controller
{
    public function __construct()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/bookcentre-21891-firebase-adminsdk-v567n-db0cfdaa64.json')
        ->withDatabaseUri('https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    // fetch all users from firebase
    public function getUser(){

        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/bookcentre-21891-firebase-adminsdk-v567n-db0cfdaa64.json')
        ->withDatabaseUri('https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app/');
        
        $users = $this->auth->listUsers($defaultMaxResults = 300, $defaultBatchSize = 1000);

        return view ('Admin.contactPage', ['senarai'=>$users]);
        
    }


    public function index()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/bookcentre-21891-firebase-adminsdk-v567n-db0cfdaa64.json')
        ->withDatabaseUri('https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $this->database = $factory->createDatabase();

        return view('Staff.index');
    }

    public function adminView()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/bookcentre-21891-firebase-adminsdk-v567n-db0cfdaa64.json')
        ->withDatabaseUri('https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app/');

        $this->database = $factory->createDatabase();

        return view('Admin.index');
    }

    public function signUp(Request $req)
    {
        $email = $req->email;
        $pass = $req->password;

        try {
            $newUser = $this->auth->createUserWithEmailAndPassword($email, $pass);
            // dd($newUser);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'The email address is already in use by another account.':
                    dd("Email sudah digunakan.");
                    break;
                case 'A password must be a string with at least 6 characters.':
                    dd("Kata sandi minimal 6 karakter.");
                    break;
                default:
                    dd($e->getMessage());
                    break;
            }
        }

        return redirect("/adminHome");  
    }

    public function signIn(Request $req){
        $email = $req->email;
        $pass = $req->password;

        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);
            // dump($signInResult->data());

            Session::put('firebaseUserId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::save();

            // dd($signInResult);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'INVALID_PASSWORD':
                    dd("Kata sandi salah!.");
                    break;
                case 'EMAIL_NOT_FOUND':
                    dd("Email tidak ditemukan.");
                    break;
                default:
                    dd($e->getMessage());
                    break;
            }
        }

        if($signInResult->firebaseUserId() == 'RUlLjB8OC1Nzbv3dxJ8cLxF2WsT2'){
            return redirect("/adminHome");
        }
        else{
            return redirect("/home");   
        }
    }

    public function signOut(){
        if (Session::has('firebaseUserId') && Session::has('idToken')) {
            // dd("User masih login.");
            $this->auth->revokeRefreshTokens(Session::get('firebaseUserId'));
            Session::forget('firebaseUserId');
            Session::forget('idToken');
            Session::save();

            return redirect("/");
            
        } else {
            // dd("User belum login.");
        }
        return redirect("/");
    }

    public function userCheck()    {
        // $idToken = "eyJhbGciOiJSUzI1NiIsImtpZCI6ImQwNTU5YzU5MDgzZDc3YWI2NDUxOThiNTIxZmM4ZmVmZmVlZmJkNjIiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vYm9va2NlbnRyZS0yMTg5MSIsImF1ZCI6ImJvb2tjZW50cmUtMjE4OTEiLCJhdXRoX3RpbWUiOjE2NzQ4MzE0ODQsInVzZXJfaWQiOiJnN3VxMmk5NVJuWE84YjVFdkFyeHBTZklMVFQyIiwic3ViIjoiZzd1cTJpOTVSblhPOGI1RXZBcnhwU2ZJTFRUMiIsImlhdCI6MTY3NDgzMTQ4NCwiZXhwIjoxNjc0ODM1MDg0LCJlbWFpbCI6ImFtaXJfaXpoYXJAeWFob28uY29tIiwiZW1haWxfdmVyaWZpZWQiOmZhbHNlLCJmaXJlYmFzZSI6eyJpZGVudGl0aWVzIjp7ImVtYWlsIjpbImFtaXJfaXpoYXJAeWFob28uY29tIl19LCJzaWduX2luX3Byb3ZpZGVyIjoicGFzc3dvcmQifX0.cSGS5SikyruyyT_zaPbI4dYzQ5F_btTzL0iPinfsztx4x3t93C4pxy1kjqMbP7lAapXmRO341gHnxv8egATMuAIs_K8kHc0HBhwYJbVHkTaV92x8xc8U7k7T1THqfXMBpfyhmxfdWqxvMYMchx0VqPP7D7viidJvfGt1ElVsa7_3KvB2nIW6ZrBlCcufeAOoN7rhYT8wedeD6zwHaPtZ9KjDig3qNuGXmKH6pFLFyPyhInRYTynFM-lCNVLbXEoRZSuyn3e1emQDew0gzvMouzmmJk6wqbvZQaObFf7MJu0GcbJTBez2_zc93LE_XUqJMk-JyuTdTtWj5ZKhQQZp8w";

        // $this->auth->revokeRefreshTokens("g7uq2i95RnXO8b5EvArxpSfILTT2");

        if (Session::has('firebaseUserId') && Session::has('idToken')) 
        {
            dd("User masih login.");
        } else {
            dd("User sudah logout.");
        }

        // try {
        //     $verifiedIdToken = $this->auth->verifyIdToken($idToken, $checkIfRevoked = true);
        //     dump($verifiedIdToken);
        //     dump($verifiedIdToken->claims()->get('sub')); // uid
        //     dump($this->auth->getUser($verifiedIdToken->claims()->get('sub')));
        // } catch (\Throwable $e) {
        //     dd($e->getMessage());
        // }

        // try {
        //     $verifiedIdToken = $this->auth->verifyIdToken(Session::get('idToken'), $checkIfRevoked = true);
        //     $response = "valid";
        //     // dd("Valid");
        //     // $uid = $verifiedIdToken->getClaim('sub');
        //     // $user = $auth->getUser($uid);
        //     // dump($uid);
        //     // dump($user);
        // } catch (\InvalidArgumentException $e) {
        //     // dd('The token could not be parsed: '.$e->getMessage());
        //     $response = "The token could not be parsed: " . $e->getMessage();
        // } catch (InvalidToken $e) {
        //     // dd('The token is invalid: '.$e->getMessage());
        //     $response = "The token is invalid: " . $e->getMessage();
        // } catch (RevokedIdToken $e) {
        //     $response = "revoked";
        // } catch (\Throwable $e) {
        //     if (substr(
        //         $e->getMessage(),
        //         0,
        //         21
        //     ) == "This token is expired") {
        //         $response = "expired";
        //     } else {
        //         $response = "something_wrong";
        //     }
        // }
        // return $response;
    }

}