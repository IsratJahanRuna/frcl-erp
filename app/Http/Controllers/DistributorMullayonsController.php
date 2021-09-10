<?php

namespace App\Http\Controllers;

use App\DistributorMullayon;
use Illuminate\Http\Request;
use Devfaysal\BangladeshGeocode\Models\Division;

class DistributorMullayonsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.layout.distributorMullayons.distributorMullayonsList', [
            'distributor_mullayons' => DistributorMullayon::orderBy('id', 'desc')->paginate(10)
        ]);
    }

    public function create(){
        $divisions = Division::where('status' , 1)->get();
        return view('admin.layout.distributorMullayons.distributorMullayonsForm', compact('divisions'));
    }


    public function store(Request $request){
        // dd($request->all());
        // die();
        $assessment_person_image = '';
        $applicant_person_image = '';
        // $data = $request->only('partnership_distibutor_name', 'partnership_distibutor_address', 'partnership_distibutor_percentage');

        if($request->hasFile('assessment_person_image')){
            $file = $request->file('assessment_person_image');
            if($file->isValid()){
                $assessment_person_image = uniqid().date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->move('public/assets/images/distributor_mullayons', $assessment_person_image);
            }
        }
        if($request->hasFile('applicant_person_image')){
            $file = $request->file('applicant_person_image');
            if($file->isValid()){
                $applicant_person_image = uniqid().date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->move('public/assets/images/distributor_mullayons', $applicant_person_image);
            }
        }

        DistributorMullayon::create($request->except('_token', 'assessment_person_image', 'applicant_person_image', 'partnership_distibutor_name', 'partnership_distibutor_address', 'partnership_distibutor_percentage') + [
            'assessment_person_image' => $assessment_person_image,
            'applicant_person_image' => $applicant_person_image,
            'partnership_distibutor_name' => json_encode($request->partnership_distibutor_name),
            'partnership_distibutor_address' => json_encode($request->partnership_distibutor_address),
            'partnership_distibutor_percentage' => json_encode($request->partnership_distibutor_percentage),
        ]);
        return redirect()->route('distributorm.index')->with('msg','Distributor Mullayons inserted Successfully');
    }


    public function view($id){
        return view('admin.layout.distributorMullayons.distributorMullayonsView', [
            'distributor' => DistributorMullayon::findOrFail($id)
        ]);
    }
}
