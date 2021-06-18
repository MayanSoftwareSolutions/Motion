<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class ProductLevels extends Component
{

  public $greet;


  public function mount()
  {

    $greetings = "";
    $time = date("H");
    $timezone = date("e");
    if ($time < "12") {
        $greetings = "Good morning";
    } else
    if ($time >= "12" && $time < "17") {
        $greetings = "Good afternoon";
    } else
    if ($time >= "17" && $time < "19") {
        $greetings = "Good evening";
    } else
    if ($time >= "19") {
        $greetings = "Good night";
    }
    $this->greet = $greetings;
  }


    public function render()
    {
      $shop = Auth::user();
      $shopApi = $shop->api()->rest('GET', '/admin/orders.json')['body'];
      $products = $shopApi->container['orders'];

      $ordervalue = 0;

      $cost = [];
      foreach ($products as $product)
      {
          $ordervalue += $product['current_subtotal_price'];
      }


      return view('livewire.product-levels',
      ['productstock' => $products],
      ['ordervalue' => $ordervalue]);
    }
}
