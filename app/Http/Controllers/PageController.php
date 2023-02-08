<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class PageController extends Controller
{
  public function home() {
    $halaman = 'The Best Place To Learn History';
    return view('home', compact('halaman'));
  }
  public function template()
  {
    return view('template');
  }
  
  public function vision() {
    $halaman = 'Vision and Mission';
    return view('vision', compact('halaman'));
  }
  
  public function infras() {
    $halaman = 'Infrastructure';
    return view('infras', compact('halaman'));
  }
  
  public function collect()
  {
    return view('collect');
  }

  public function cao()
  {
    $halaman = 'Cultural Art Objects';
    return view('collect.cao', compact('halaman'));
  }
  public function crm()
  {
    $halaman = 'Cultural Reserve Mockup';
    return view('collect.crm', compact('halaman'));
  }
  public function diorama()
  {
    $halaman = 'Diorama';
    return view('collect.diorama', compact('halaman'));
  }
  public function statue()
  {
    $halaman = 'Statue';
    return view('collect.statue', compact('halaman'));
  }
  public function artific()
  {
    $halaman = 'Artifical Collection';
    return view('collect.artific', compact('halaman'));
  }
  public function library()
  {
    $halaman = 'Library';
    return view('collect.library', compact('halaman'));
  }

  public function bhairawa()
  {
    $halaman = 'Bhirawa';
    return view('statue.bhairawa', compact('halaman'));
  }
  public function durga()
  {
    $halaman = 'Durga Mahesa Sura Mardini';
    return view('statue.durga', compact('halaman'));
  }
  public function ganesha()
  {
    $halaman = 'Ganesha';
    return view('statue.ganesha', compact('halaman'));
  }
  public function mahakala()
  {
    $halaman = 'Mahakala';
    return view('statue.mahakala', compact('halaman'));
  }
  public function mahisha()
  {
    $halaman = 'Mahisha';
    return view('statue.mahisha', compact('halaman'));
  }
  public function nandi()
  {
    $halaman = 'Nandi';
    return view('statue.nandi', compact('halaman'));
  }
  public function nandiswara()
  {
    $halaman = 'Nandiswara';
    return view('statue.nandiswara', compact('halaman'));
  }

  //Ruoute / Lokasi
  public function lokasi() {
    $halaman = 'Route';
    return view('lokasi', compact('halaman'));
  }

}

?>