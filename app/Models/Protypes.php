<?php

namespace App\Models;

use App\Http\Requests\StoreProtypesRequest;
use App\Http\Requests\UpdateProtypesRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protypes extends Model
{
    use HasFactory;

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'type_id';

    public function StoreProtype(StoreProtypesRequest $request){
        $protype = new Protypes();
        $protype->type_name = $request->input('type_name');
        $protype->save();

        return redirect()->route('protypes');
    }

    public function UpdateProtype(UpdateProtypesRequest $request){
        $protype = Protypes::find($request->type_id);
        $protype->type_name = $request->input('type_name');
        $protype->save();

        return redirect()->route('protypes');
    }

    public function MoveToTrash(Protypes $protypes ,$id){
        $protype = $protypes->find($id);
        if($protype){
            $protype->type_status = 1;
            $protype->update();
            return redirect()->route('protypes');
        }
        return redirect()->route('protypes')->withSuccess('Your protype are not valid');
    }

    public function RestoreProtype(Protypes $protypes ,$id){
        $protype = $protypes->find($id);
        if($protype){
            $protype->type_status = 0;
            $protype->update();
            return redirect()->route('protypesTrash');
        }
        return redirect()->route('protypesTrash')->withSuccess('Your protype are not valid');
    }

    public function DeleteProtype(Protypes $protypes, $id){
        $protype = $protypes->find($id);
        if($protype){
            $protype->delete();
            return redirect()->route('protypesTrash');
        }
        return redirect()->route('protypesTrash')->withSuccess('Your protype are not valid');
    }
}
