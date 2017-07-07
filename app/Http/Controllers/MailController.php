<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class MailController extends Controller
{
    public function send()
    {
        $name = 'demo';
        $flag = Mail::send('emails.test',['name'=>$name],function($message){
            $to = '1554793180@qq.com';
            $message ->to($to)->subject('测试邮件');
        });

        // if($flag){
        //     echo $flag.'发送邮件成功，请查收！';
        // }else{
        //     echo $flag.'发送邮件失败，请重试！';
        // }
    }
}