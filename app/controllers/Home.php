<?php

/**
 * home class
 */
class Home extends Controller
{
    //use Controller;

    public function index()
    {

        $this->view('home');
    }

    public function edit()
    {
        echo "from edit function";
        $this->view('home');
    }
}
