<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Tambon;
use Illuminate\Http\Request;
use App\Models\Amphur;

class partialController extends Controller
{
    public function amphurList($provinceId){
        $amphur = Amphur::where('province_id',$provinceId)->get();
        return view('/partial/amphurList',[
            'amphur' => $amphur,
        ]);
    }

    public function tambonList($amphurCode){
        $tambon = Tambon::where('amphur_code',$amphurCode)->get();
        return view('/partial/tambonList',[
            'tambon' => $tambon,
        ]);
    }

    public function plantList($typeCode){
        $plant = Plant::where('type_code',$typeCode)
            ->orderby('detail_name')
            ->get();
        return view('/partial/plantList',[
            'plant' => $plant,
        ]);
    }

}
