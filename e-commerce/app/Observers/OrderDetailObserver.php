<?php

namespace App\Observers;

use App\Models\OrderDetail;

class OrderDetailObserver
{
    /**
     * Handle the OrderDetail "created" event.
     */
    public function created(OrderDetail $orderDetail)
    {
        // Decrement the stock of the associated product
        $product = $orderDetail->product;
        $product->decrement('stock', $orderDetail->quantity);
    }

    /**
     * Handle the OrderDetail "updated" event.
     */
    public function updated(OrderDetail $orderDetail): void
    {
        //
    }

    /**
     * Handle the OrderDetail "deleted" event.
     */
    public function deleted(OrderDetail $orderDetail): void
    {
        //
    }

    /**
     * Handle the OrderDetail "restored" event.
     */
    public function restored(OrderDetail $orderDetail): void
    {
        //
    }

    /**
     * Handle the OrderDetail "force deleted" event.
     */
    public function forceDeleted(OrderDetail $orderDetail): void
    {
        //
    }
}
