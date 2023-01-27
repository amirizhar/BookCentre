<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

// https://firebase.google.com/docs/database/unity/retrieve-data

class FirebaseController extends Controller
{
    public function index()
    {

        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/bookcentre-21891-firebase-adminsdk-v567n-db0cfdaa64.json')
            ->withDatabaseUri('https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app/');
 
        $database = $firebase->createDatabase();


        $blog = $database
        ->getReference('blog');

        $Book = $database
        ->getReference('Book');
 
        echo '<pre>';
        print_r($blog->getvalue());
        echo '</pre>';

        echo '<pre>';
        print_r($Book->getvalue());
        echo '</pre>';

    }
}