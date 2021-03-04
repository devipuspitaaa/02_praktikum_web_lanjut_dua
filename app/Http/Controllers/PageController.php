<?php

namespace App\http\Controllers;

use Illuminate\http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM 1941720048 Devi Puspitasari';
    }

    public function articles($id) {
        return 'Halaman artikel dengan ID' .$id;
    }
}