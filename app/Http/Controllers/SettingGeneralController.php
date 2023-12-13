<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SettingGeneral;

class SettingGeneralController extends Controller
{
    public function generalSetting()
    {
        $data_setting = SettingGeneral::latest()->first();                
        return view('setting.setting', compact('data_setting'));
    }

    public function generalSettingStore(Request $request)
    {
        $this->validate($request, [
            'site_logo' => 'image|mimes:jpg,jpeg,png,gif|max:100000',
        ]);

        $data = $request->except('site_logo');        

        $general_setting = SettingGeneral::latest()->first();
        $general_setting->id = 1;
        $general_setting->site_title = $data['site_title'];
        $general_setting->currency = $data['currency'];                
        $general_setting->date_format = $data['date_format'];
        $general_setting->t_c = $data['t_c'];

        $logo = $request->file('site_logo');
        if ($logo) {
            $logoName = Str::random(7);
            $logo->move('public/logo', $logoName);
            $general_setting->site_logo = $logoName;
        }
        $general_setting->save();    
        return redirect()->back()->with('status', 'Datos actualizados con éxito');
    }
}
