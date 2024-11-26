<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{  
    
    public function index(Request $request){        
        $event=[
            [
                'image'         => 'images/CSC-Logo-v2.6-CMYK.png',
                'title'         => 'National Cyber Week',
                'description'   => 'National Cyberweek is a competition for university student',
                'link'          =>''
            ],
            [
                'image'         => 'images/picoctf.png',
                'title'         => 'picoCTF',
                'description'   => 'PicoCTF 2023 is a competition for university student',
                'link'          =>''
            ],
            [
                'image'         => 'images/hackTheBox-removebg-preview.png',
                'title'         => 'Hack The Box',
                'description'   => 'Where hackers level up! An online cybersecurity training platform',
                'link'          =>''
            ],
            [
                'image'         => 'images/flagss.webp',
                'title'         => 'ctflearn',
                'description'   => 'The most begineer-friendly way to get into hacking',
                'link'          =>''
            ],
            [
                'image'         => 'images/CSC-Logo-v2.6-CMYK.png',
                'title'         => 'National Cyber Week',
                'description'   => 'National Cyberweek is a competition for university student',
                'link'          =>''
            ],
            [
                'image'         => 'images/picoctf.png',
                'title'         => 'PicoCTF',
                'description'   => 'PicoCTF 2023 is a competition for university student',
                'link'          => ''
            ],
             [
                'image'         => 'images/hackTheBox-removebg-preview.png',
                'title'         => 'Hack The Box',
                'description'   => 'Where hackers level up! An online cybersecurity training platform',
                'link'          => ''
            ],
             [
                'image'         => 'images/CSC-Logo-v2.6-CMYK.png',
                'title'         => 'ctflearn',
                'description'   => 'The most begineer-friendly way to get into hacking',
                'link'          => ''
            ],

        ];           
      
        return view('inc.header').view('inc.navtop').view('event',compact('event')).view('inc.footer');
    }

   
}
