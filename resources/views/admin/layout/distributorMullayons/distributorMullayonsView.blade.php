@extends('admin.master')
@section('css')

<style>
    .custom-control-label h6 {
        color: #854fff;
    }

    body {
        overflow: scroll;
    }

</style>

@endsection
@section('content')


@if(Session::has('msg'))
<p class="alert alert-success">{{ Session::get('msg') }}</p>
@endif


<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Distributor Mullayon Information</h4>
        </div>
    </div>
    <div class="card">
        <h6 class="title nk-block-title">Distributor Mullayon Information</h6>
        <div class="card-inner">
            <h4 class="title nk-block-title border-dark">Distributor Mullayon Information</h4>
            <hr>
            <div class="row g-4 fs-4">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group d-flex">
                                <label class="form-label fw-bold mr-3">ডিভিশনঃ</label>
                                <span class="fw-medium"> {{ Devfaysal\BangladeshGeocode\Models\Division::find($distributor->distributor_division)->name }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group d-flex">
                                <label class="form-label fw-bold mr-3">জোনঃ</label>
                                <span class="fw-medium"> {{ Devfaysal\BangladeshGeocode\Models\District::find($distributor->distributor_zone)->name }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group d-flex">
                                <label class="form-label fw-bold mr-3">বেসঃ</label>
                                <span class="fw-medium"> {{ Devfaysal\BangladeshGeocode\Models\Upazila::find($distributor->distributor_base)->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">বর্তমান ব্যবসায়ের বিবরণঃ</label>
                        <span class="fw-medium">{{ $distributor->business_details }}</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">ব্যবসায়ের অবস্থানঃ</label>
                        <span class="fw-medium">{{ $distributor->business_place }}</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">গোডাউন সাইজঃ</label>
                        <span class="fw-medium pr-4">{{ $distributor->godown_size }}</span>
                        <span class="fw-medium">{{ $distributor->have_godown }}</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">ডেলিভারি ভেহিকেল/বাহনঃ</label>
                        @if ($distributor->mechanical_number == '')
                            <span class="fw-medium pr-4">মেকানিক্যাল <span class="text-success fw-bold ">০</span> টা</span>
                        @else
                            <span class="fw-medium pr-4">মেকানিক্যাল <span class="text-success fw-bold ">{{ $distributor->mechanical_number }}</span> টা</span>
                        @endif
                        @if ($distributor->non_mechanical_number == '')
                            <span class="fw-medium pr-4">ননমেকানিক্যাল <span class="text-success fw-bold">০</span> টা</span>
                        @else
                            <span class="fw-medium pr-4">ননমেকানিক্যাল <span class="text-success fw-bold ">{{ $distributor->non_mechanical_number }}</span> টা</span>
                        @endif
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mechanical_details" class="form-label fw-bold">
                                    <u>মেকানিক্যালের বিবরণঃ</u>
                                </label>
                                @if ($distributor->mechanical_details == '')
                                    <span class="fw-medium">মেকানিক্যালের কোনো বিবরণ নেই!</span>
                                @else
                                    <span class="fw-medium">{{ $distributor->mechanical_details }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nonMechanical_details" class="form-label fw-bold">
                                    <u>ননমেকানিক্যালের বিবরণঃ</u>
                                </label>
                                @if ($distributor->nonMechanical_details == '')
                                    <span class="fw-medium">নন মেকানিক্যালের কোনো বিবরণ নেই!</span>
                                @else
                                    <span class="fw-medium">{{ $distributor->nonMechanical_details }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">অফিসঃ</label>
                        <span class="fw-medium">{{ $distributor->is_office }}</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-1">ব্যবসায় লগ্নিকৃত টাকার পরিমাণঃ</label>
                        <span class="fw-medium mr-5">{{ $distributor->business_money_amount }} ৳</span>
                        <label class="form-label fw-bold mr-1">নিজঃ</label>
                        <span class="fw-medium mr-3">{{ $distributor->business_own_money }} %</span>
                        <label class="form-label fw-bold mr-1">ব্যাংকঃ</label>
                        <span class="fw-medium">{{ $distributor->business_bank_money }} %</span>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold col-lg-3 pl-0">ইলেকট্রনিক ব্যাবসায়ের অভিজ্ঞতাঃ</label>
                        <span class="fw-medium mr-5">{{ $distributor->electric_business_experience_year }} বছর</span>
                        <span class="fw-medium mr-3">{{ $distributor->electric_business_experience_month }} মাস</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold col-lg-3 pl-0">অন্যান্য ব্যাবসায়ের অভিজ্ঞতাঃ</label>
                        <span class="fw-medium mr-5">{{ $distributor->other_business_experience_year }} বছর</span>
                        <span class="fw-medium mr-3">{{ $distributor->other_business_experience_month }} মাস</span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3">মালিকানার ধরণঃ</label>
                        <span class="fw-medium">{{ $distributor->ownership_type }}</span>
                    </div>
                </div>
                {{-- {{ $distributor->partnership_distibutor_name }} --}}
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label mt-1 fw-bold"><u>যৌথ-মালিকানা পরিবেশকের সাথে প্রযোজ্যঃ</u></label>
                        <table class="table border table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3">ক্রমিক নং</th>
                                    <th class="p-3">নাম</th>
                                    <th class="p-3">ঠিকানা</th>
                                    <th scope="col" class="py-3">অংশীদারি %</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $details=json_decode($distributor->partnership_distibutor_name,  true);
                                    $details1=json_decode($distributor->partnership_distibutor_address,  true);
                                    $details2=json_decode($distributor->partnership_distibutor_percentage,  true);
                                    $n = 0;
                                @endphp
                                 <td>@php echo ++$n; @endphp</td>
                                @foreach($details as $key=>$value)
                                <tr>
                               
                                <td><input type="text" value="{{$value}}"
                                        class="form-control"></td>
                                
                                
                                @endforeach
                               
                                @foreach($details1 as $key=>$value)
                                
                                <td><input type="text" value="{{$value}}"
                                        class="form-control"></td>
                                   
                                @endforeach
                                @foreach($details2 as $key=>$value)
                          
                                <td> <input type="text" value="{{$value}}"
                                        class="form-control"></td>
                                </tr>   
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label fw-bold mt-1"><u>পূর্বে অথবা বর্তমানে কোন ইলেক্টিক কোম্পানির ডিট্রিবিউটরশীপ থাকলে তার তালিকাঃ</u></label>
                        <table class="table border table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3">ক্রমিক নং</th>
                                    <th class="p-3">কোম্পানির নাম</th>
                                    <th class="p-3">মেয়াদকাল</th>
                                </tr>
                            </thead>
                            @php
                                $details=json_decode($distributor->before_electrical_distributorship_name,  true);
                                $details1=json_decode($distributor->before_electrical_distributorship_duration,  true);
                            @endphp
                            <tbody id="toggle-row-1">
                                <td>1</td>
                                {{-- @foreach($details as $key=>$value)
                                <td><input type="text"
                                        value="{{$value}}"
                                        class="from-control form-control"></td>
                                        @endforeach
                                        @foreach($details1 as $key=>$value)
                                <td><input type="text"
                                    value="{{$value}}"
                                        class="from-control form-control"> </td>
                                        @endforeach --}}
                            </tbody>
                        </table>
                        <button type="button" id="add-1" class="btn btn-white mt-3">+ আরো যুক্ত
                            করুন</button>
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold mr-3"><u>ফার্স্ট রেইস ইলেকট্রিক এর সহিত ভবিষ্যত ব্যবসায়ের সম্ভাবনা, মাসিক গড় (সেকেন্ডারি সেলস ফোরকাস্ট)</u></label>
                        <span class="fw-medium">{{ $distributor->probability_business_duration_withFirstrays }}</span>
                    </div>
                </div>


                <div class="col-lg-12">
                    <p class="form-label fw-bold mr-3"><u>যৌথ-মালিকানা প্রতিষ্ঠানের ক্ষেত্রে মনোনীত প্রতিনিধিঃ</u></p>
                    <div class="form-group d-flex m-0">
                        <label class="form-label fw-bold col-lg-2">নাম</label>
                        <span class="fw-medium">{{ $distributor->partnership_distibutor_representative_name }}</span>
                    </div>
                    <div class="form-group d-flex m-0">
                        <label class="form-label fw-bold col-lg-2">ঠিকানা</label>
                        <span class="fw-medium">{{ $distributor->partnership_distibutor_representative_address }}</span>
                    </div>
                    <div class="form-group d-flex m-0">
                        <label class="form-label fw-bold col-lg-2">মোবাইল নাম্বার</label>
                        <span class="fw-medium">{{ $distributor->partnership_distibutor_representative_mobile }}</span>
                    </div>
                </div>

                <p class="px-4 mt-5 fw-medium">আমি ফার্স্ট রেইস ইলেকট্রনিক পরিবেশক পরিচালনার নীতিমালা পড়িয়া এবং নীতিমালার সহিত সজ্ঞেনে সম্মতি জ্ঞাপন করিলাম এবং পরিবেশক হওয়ার জন্য আবেদন করিলাম| আমাকে পরিবেশনা ব্যবসা পরিচালনার অনুমতি প্রদান করিয়া বাধিত করবেন|</p>


                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table border table-bordered align-middle">
                                <tbody>
                                    <tr>
                                        <th class="pt-4">মূল্যায়নকারীর স্বাক্ষর</th>
                                        <td>
                                            <img src="{{ asset('public/assets/images/distributor_mullayons/'.$distributor->assessment_person_image) }}" alt="" class="img-fluid rounded-circle" style="width: 50px; height:50px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>নাম</th>
                                        <td>{{ $distributor->assessment_person_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>পদবি</th>
                                        <td>{{ $distributor->assessment_person_designation }}</td>
                                    </tr>
                                    <tr>
                                        <th>আইডি নাম্বার</th>
                                        <td>{{ $distributor->assessment_person_nid }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table border table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="pt-4">আবেদনকারীর স্বাক্ষর</th>
                                        <td>
                                            <img src="{{ asset('public/assets/images/distributor_mullayons/'.$distributor->applicant_person_image) }}" alt="" class="img-fluid rounded-circle" style="width: 50px; height:50px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>নাম</th>
                                        <td>{{ $distributor->applicant_person_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>মোবাইল নাম্বার</th>
                                        <td>{{ $distributor->assessment_person_designation }}</td>
                                    </tr>
                                    <tr>
                                        <th>এরিয়া</th>
                                        <td>{{ $distributor->applicant_person_area }}</td>
                                    </tr>
                                    <tr>
                                        <th>ডিভিশন</th>
                                        <td>{{ $distributor->applicant_person_division }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-6"></div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">জমা দিন</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @section('js')
<script type="text/javascript">
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            // alert('hello');
            i++;
            $('#toggle-row').append('<tr id="row' + i +
                '"><td>' + i +
                '</td><td><input type="text" name="partnership_distibutor_name" class="from-control"></td><td><input type="text" name="partnership_distibutor_address" class="from-control"> </td><td> <input type="text" name="partnership_distibutor_percentage" class="from-control"></td>"'
            )
        });
    });


    $(document).ready(function () {
        var i = 1;
        $('#add-1').click(function () {
            i++;
            $('#toggle-row-1').append('<tr id="row' + i +
                '"><td>' + i +
                '</td> <td><input type="text" name="before_electrical_distributorship_name" class="from-control"></td> <td><input type="text" name="before_electrical_distributorship_duration" class="from-control"></td>"'
            )
        });
    });



    $(document).ready(function () {
        $('#division').change(function () {
            var division_id = $(this).val();
            // alert(division_id);
            // ajaxSetup start
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                }
            });
            // ajaxSetup end

            // ajaxSetup district request start
            $.ajax({
                type: 'POST',
                url: '{{ route('
                distributor.district ') }}',
                data: {
                    division_id: division_id
                },
                success: function (data) {
                    $('#district').html(data);
                }
            });
            // ajaxSetup district request end
        });

        $('#district').change(function () {
            var district_id = $(this).val();
            // ajaxSetup upazila request start
            $.ajax({
                type: 'POST',
                url: '{{ route('
                distributor.upazila ') }}',
                data: {
                    district_id: district_id
                },
                success: function (data) {
                    $('#upazila').html(data);
                }
            });
            // ajaxSetup upazila  request end
        });
    });

</script>
@endsection --}}
