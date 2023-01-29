<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SshTestController extends Controller
{
    public function sshFromGitLaravel2()
    {
        $test = 123;
        return '777 develop';
    }
}
