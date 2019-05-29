<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gadgets\Gadget;

class GadgetTestController extends Controller
{
    public function index(Gadget $customServiceInstance) {
        dump($customServiceInstance->show('categories'));
}
}
