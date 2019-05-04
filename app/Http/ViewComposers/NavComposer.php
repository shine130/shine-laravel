<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;

class NavComposer{
  public function compose(View $view){
    $view->with('notifications',5);
  }
}