<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class TestController extends Controller
{
    public function test1(){

        // echo 'lagi coba koneksi';
        $pages = Page::where('id',1)->first();


        dd($pages);
        foreach($pages as $page){
            echo $page->name.' - '.$page->description;
            echo '<br> ';
        }

    }
}
