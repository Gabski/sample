<?php

use App\Services\ResponseTwig;

class SimpleController
{
    public function simple()
    {
        return new ResponseTwig('simple.twig', [
            'title' => 'Działa'
        ]);
    }

}
