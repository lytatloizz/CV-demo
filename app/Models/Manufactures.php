<?php

namespace App\Models;

use App\Http\Requests\StoreManufacturesRequest;
use App\Http\Requests\UpdateManufacturesRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufactures extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'manu_id';

    public function StoreManufacture(StoreManufacturesRequest $request)
    {
        $manu = new Manufactures();
        $manu->manu_name = $request->input('manu_name');
        $manu->save();
        return redirect()->route('manufactures');
    }

    public function UpdateManufacture(UpdateManufacturesRequest $request)
    {
        $manu = Manufactures::find($request->input('manu_id'));
        $manu->manu_name = $request->input('manu_name');
        $manu->save();
        return redirect()->route('manufactures');
    }

    public function MoveToTrash($id)
    {
        $manufacture = Manufactures::find($id);
        if ($manufacture) {
            $manufacture->manu_status = 1;
            $manufacture->update();
            return redirect()->route('manufactures');
        }
        return redirect()->route('manufactures')->withSuccess('Your manufacture are not valid');
    }

    public function RestoreManufactore($id)
    {
        $manufacture = Manufactures::find($id);
        if ($manufacture) {
            $manufacture->manu_status = 0;
            $manufacture->update();
            return redirect()->route('manufacturesTrash');
        }
        return redirect()->route('manufacturesTrash')->withSuccess('Your manufacture are not valid');
    }

    public function DeleteManufactore($id)
    {
        $manufacture = Manufactures::find($id);
        if ($manufacture) {
            $manufacture->delete();
            return redirect()->route('manufacturesTrash');
        }
        return redirect()->route('manufacturesTrash')->withSuccess('Your manufacture are not valid');
    }
}
