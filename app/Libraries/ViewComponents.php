<?php namespace App\Libraries;

class ViewComponents
{
    public function getViewNavbar()
    {
        return view('components/navbar');
    }

    //--------------------------------------------------------------------

    public function getViewFooter()
    {
        return view('components/footer');
    }
}