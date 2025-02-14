<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtermController extends Controller
{
    public function midterm()
    {
        // Example data
        $items = [
            ['item' => 'Mouse', 'qty' => 20, 'unit_price' => 10.00, 'discount' => 0.07],
            ['item' => 'Keyboard', 'qty' => 12, 'unit_price' => 20.00, 'discount' => 0.07],
            ['item' => 'Monitor', 'qty' => 13, 'unit_price' => 25.00, 'discount' => 0.07],
            ['item' => 'USB Flash', 'qty' => 8, 'unit_price' => 15.00, 'discount' => 0.07],
            ['item' => 'SSD Hard Disk', 'qty' => 9, 'unit_price' => 50.00, 'discount' => 0.07],
            ['item' => 'Network Cable', 'qty' => 12, 'unit_price' => 3.00, 'discount' => 0.07],
        ];
        $subtotal = 0;
            $maxPrice = 0;
            $minPrice = PHP_INT_MAX;
            $totalItems = 0;
            $taxRate = 0.05;
            foreach ($items as &$item) {
                $totalPrice = $item['qty'] * $item['unit_price'];
                $discountAmount = $totalPrice * $item['discount'];
                $amount = $totalPrice - $discountAmount;
                $item['amount'] = $amount;
    
                $subtotal += $amount;
                $maxPrice = max($maxPrice, $item['unit_price']);
                $minPrice = min($minPrice, $item['unit_price']);
                $totalItems += $item['qty'];
            }
            $tax = $subtotal * $taxRate;
            $total = $subtotal + $tax;
    
            return view('midterm', compact('items', 'subtotal', 'tax', 'total', 'maxPrice', 'minPrice', 'totalItems'));

    }
}
