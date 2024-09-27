<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
        public function hello() {
        return 'Hello World';
        }
        public function greeting(){
            return view('JS2.hello')
            ->with('name','Ahmad Abror Rozaqi Fatoni')
            ->with('occupation','JAKIII');
            }

}