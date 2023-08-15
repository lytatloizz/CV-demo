<?php

namespace App\Models;

use App\Http\Requests\StoreBillsRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bills extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'bill_id';

    public function StoreBill(StoreBillsRequest $request)
    {
        $bill = new Bills();
        if (Auth::check()) {
            $user = User::find(Auth::id());
            $bill->user_id = $user->user_id;
            Carts::where('user_id', Auth::id())->delete();
        }
        $bill->user_name = $request->user_name;
        $bill->user_email = $request->user_email;
        $bill->bill_description = $request->input('product_description');
        $bill->bill_qty = $request->input('product_qty');
        $bill->bill_price = $request->input('product_price');
        $bill->save();

        return redirect()->route('index');
    }

    public function DeleteBill(Bills $bills, $id)
    {
        $bill = $bills->find($id);
        if ($bill) {
            $bill->delete();
            return redirect()->route('billsShow');
        }
        return redirect()->route('billsShow')->withSuccess('Your bill are not valid');
    }
}
