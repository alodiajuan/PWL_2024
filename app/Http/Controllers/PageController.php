<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'index';
    }
    public function about() {
        return 'about';
            }
    public function articles($id) {
        return 'Halaman Artikel dengan ID: ' . $id;
            }
    public function id() {
        return 'about';
            }
}
?>