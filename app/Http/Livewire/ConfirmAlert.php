<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ConfirmAlert extends Component
{
    /**
     * Contact Id
     *
     * @var [inf]
     */
    public $product_id;

    /**
     * Render the confirm-alert button
     * @return view
     * @author Rashid Ali <realrashid05@gmail.com>
     */
    public function render()
    {
        return view('livewire.confirm-alert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @author Rashid Ali <realrashid05@gmail.com>
     */
    public function destroy($product_id)
    {
        Product::find($product_id)->delete();
    }
}