<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author bml
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller {
    public function index() {
        $posts = Post::where('draft', '=', 0)->get();
        return view('home', ['posts' => $posts]);
    }
}
