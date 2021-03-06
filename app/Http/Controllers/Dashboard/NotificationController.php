<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
    	$data = [];
    	$data['title'] = 'Notifikasi';

    	return view('dashboard.notification.index', $data);
    }

    public function detail() {
    	$data = [];
    	$data['title'] = 'Update System Website 3 Maret 2021';

    	return view('dashboard.notification.detail', $data);
    }
}
