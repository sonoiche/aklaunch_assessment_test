<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $json_emails        = file_get_contents('email_names.json');
    $json_ccs           = file_get_contents('email_numbers.json');
    $data['emails']     = $emails   = json_decode($json_emails, true);
    $data['numbers']    = $numbers  = json_decode($json_ccs, true);

    // $contents = [];
    // foreach ($emails as $key => $item) {
    //     if($numbers[$key]['email'] == $item['email']) {
    //         $contents[] = [
    //             'fname'     => $item['first_name'],
    //             'lname'     => $item['last_name'],
    //             'email'     => $item['email'],
    //             'cc'        => $numbers[$key]['cc_number']
    //         ];
    //     }
    // }

    return view('welcome', $data);
});
