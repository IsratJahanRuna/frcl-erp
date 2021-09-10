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
            <hr><br>
            <form action="{{ route('distributorm.store') }}" method="POST" class="p-5 align-center"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-4 fs-4">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <label for="distributor_division" class="form-label">Division
                                    *</label>
                                <input type="text" name="distributor_division"
                                    id="distributor_division" class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label for="distributor_zone" class="form-label">Zone *</label>
                                <input type="text" name="distributor_zone" id="distributor_zone"
                                    class="form-control">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label for="distributor_base" class="form-label">Base *</label>
                                <input type="text" name="distributor_base" id="distributor_base"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1 "><u>বর্তমান ব্যবসায়ের
                                    বিবরণঃ</u></label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <div
                                        class="custom-control custom-control-sm custom-checkbox mx-3">
                                        <input type="radio" class="custom-control-input"
                                            id="distributor" name="business_details"
                                            value="ডিস্ট্রিবিউটর">
                                        <label class="custom-control-label"
                                            for="distributor">ডিস্ট্রিবিউটর</label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="diller"
                                            name="business_details" value="ডিলার">
                                        <label class="custom-control-label "
                                            for="diller">ডিলার</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1"><u>ব্যবসায়ের অবস্থানঃ
                                </u></label>
                            <ul class="custom-control-group g-3 align-center fw-bold">
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox ml-3">
                                        <input type="radio" class="custom-control-input" id="highway" name="business_place" value="হাইওয়ের পাশে">
                                        <label class="custom-control-label" for="highway">হাইওয়ের পাশে</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="mainRoad" name="business_place" value="মেইন রোডে">
                                        <label class="custom-control-label" for="mainRoad">মেইন রোডে</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="roadSide" name="business_place" value="সাইড রোডে">
                                        <label class="custom-control-label" for="roadSide">সাইড রোডে</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="others" name="business_place" value="অন্যান্য">
                                        <label class="custom-control-label" for="others">অন্যান্য</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group d-flex">
                                    <label class="form-label fw-bold" for="godown_size">গোডাউন সাইজ
                                    </label>
                                    <input type="text" name="godown_size" class="form-control"
                                        id="godown_size">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="custom-control-group g-3 align-center fw-bold">
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox ml-3">
                                            <input type="radio" class="custom-control-input"
                                                id="godownOwn" name="have_godown" value="নিজ">
                                            <label class="custom-control-label" for="godownOwn">নিজ</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="godownRent" name="have_godown" value="ভাড়া">
                                            <label class="custom-control-label" for="godownRent">ভাড়া</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <p class="fw-bold">ডেলিভারি ভেহিকেল/বাহনঃ</p>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="form-group d-flex">
                                    <label for="mechanical_number" class="mr-2">মেকানিক্যাল</label>
                                    <input type="text" name="mechanical_number" id="mechanical_number" class="form-control d-inline">
                                    <span class="ml-2">____________টা</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group d-flex">
                                    <label for="non_mechanical_number" class="mr-2">ননমেকানিক্যাল</label>
                                    <input type="text" class="form-control d-inline" id="non_mechanical_number" name="non_mechanical_number">
                                    <span class="ml-2">____________টা</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mechanical_details" class="form-label fw-bold">মেকানিক্যালের বিবরণঃ</label>
                                    <textarea name="mechanical_details" id="mechanical_details" rows="10" class="form-control" placeholder="মেকানিক্যালের বিবরণ"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nonMechanical_details"
                                        class="form-label fw-bold">ননমেকানিক্যালের বিবরণঃ</label>
                                    <textarea name="nonMechanical_details"
                                        id="nonMechanical_details" rows="10"
                                        class="form-control" placeholder="ননমেকানিক্যালের বিবরণ"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1 ">অফিস</label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox mx-3">
                                        <input type="radio" class="custom-control-input" id="have_office" name="is_office" value="আছে">
                                        <label class="custom-control-label" for="have_office">আছে</label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="no_office" name="is_office" value="নাই">
                                        <label class="custom-control-label" for="no_office">নাই</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group d-flex form-box">
                                    <label class="form-label fw-bold mr-2" for="business_money_amount">ব্যবসায় লগ্নিকৃত টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="business_money_amount" id="business_money_amount">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group d-flex form-box">
                                    <label class="form-label mr-2" for="business_own_money">নিজ</label>
                                    <input type="text" id="business_own_money" name="business_own_money" class="form-control form-box w-75" placeholder="33%">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group d-flex form-box">
                                    <label class="form-label mr-2" for="business_bank_money">ব্যাংক </label>
                                    <input type="text" class="form-control form-box w-75" id="business_bank_money" name="business_bank_money" placeholder="60%">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group d-flex">
                                <label class="form-label fw-bold" for="business_money_amount">ব্যবসায় লগ্নিকৃত টাকার পরিমাণঃ</label>
                                <div class="form-control-wrap" style="margin-left: 5%;">
                                    <input type="text" class="form-control" name="business_money_amount" id="business_money_amount">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group d-flex form-box">
                                <label class="form-label" for="business_own_money">নিজ</label>
                                <div class="form-control-wrap ml-1">
                                    <input type="text" id="business_own_money" name="business_own_money" class="form-control form-box w-75" placeholder="33%">
                                </div>
                            </div>
                            <div class="form-group d-flex form-box">
                                <label class="form-label" for="business_bank_money">ব্যাংক </label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-box w-75" id="business_bank_money" name="business_bank_money" placeholder="60%">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1 ">
                                <u>ইলেকট্রনিক ব্যাবসায়ের অভিজ্ঞতা</u>
                            </label>
                            <div class="form-control-wrap ml-2 d-flex">
                                <input type="text" class="form-control" id="electric_business_experience_year" placeholder="২" name="electric_business_experience_year">
                                <span class="ml-2"></span> বছর
                            </div>
                            <div class="form-control-wrap ml-2 d-flex">
                                <input type="text" class="form-control" id="electric_business_experience_month" placeholder="৩" name="electric_business_experience_month">
                                <span class="ml-2"></span> মাস
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1">
                                <u>অন্যান্য ব্যবসায়ের অভিজ্ঞতা</u>
                            </label>
                            <div class="form-control-wrap ml-2 d-flex">
                                <input type="text" class="form-control" id="other_business_experience_year" placeholder="১"
                                    name="other_business_experience_year">
                                <span class="ml-2"></span> বছর
                            </div>
                            <div class="form-control-wrap ml-2 d-flex">
                                <input type="text" class="form-control" id="other_business_experience_month" placeholder="৭"
                                    name="other_business_experience_month">
                                <span class="ml-2"></span> মাস
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group d-flex">
                            <label class="form-label fw-bold mt-1 ">মালিকানার ধরণঃ</label>
                            <ul class="custom-control-group g-3 align-center">
                                <li>
                                    <div class="custom-control custom-control-sm custom-checkbox mx-3">
                                        <input type="radio" class="custom-control-input" id="oneOwnership" name="ownership_type" value="এক মালিকানা">
                                        <label class="custom-control-label" for="oneOwnership">এক মালিকানা</label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="multipleOwnership" name="ownership_type" value="যৌথ-মালিকানা">
                                        <label class="custom-control-label" for="multipleOwnership">যৌথ-মালিকানা</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label mt-1 ">যৌথ-মালিকানা পরিবেশকের সাথে প্রযোজ্য</label>
                            <table class="table border table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="py-3">ক্রমিক নং</th>
                                        <th class="p-3">নাম</th>
                                        <th class="p-3">ঠিকানা</th>
                                        <th scope="col" class="py-3">অংশীদারি %</th>
                                    </tr>
                                </thead>
                                <tbody id="toggle-row">
                                    <td>1</td>
                                    <td><input type="text" name="partnership_distibutor_name[]"
                                            class="form-control"></td>
                                    <td><input type="text" name="partnership_distibutor_address[]"
                                            class="form-control"> </td>
                                    <td> <input type="text" name="partnership_distibutor_percentage[]"
                                            class="form-control"></td>
                                </tbody>
                            </table>
                            <button type="button" id="add" class="btn btn-white mt-3">+ আরো যুক্ত করুন</button>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label mt-1 ">পূর্বে অথবা বর্তমানে কোন ইলেক্টিক কোম্পানির ডিট্রিবিউটরশীপ থাকলে তার তালিকা</label>
                            <table class="table border table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="py-3">ক্রমিক নং</th>
                                        <th class="p-3">কোম্পানির নাম</th>
                                        <th class="p-3">মেয়াদকাল</th>
                                    </tr>
                                </thead>
                                <tbody id="toggle-row-1">
                                    <td>1</td>
                                    <td><input type="text"
                                            name="before_electrical_distributorship_name"
                                            class="from-control form-control"></td>
                                    <td><input type="text"
                                            name="before_electrical_distributorship_duration"
                                            class="from-control form-control"> </td>
                                </tbody>
                            </table>
                            <button type="button" id="add-1" class="btn btn-white mt-3">+ আরো যুক্ত
                                করুন</button>
                        </div>
                    </div>

                    <div class="col-lg-12 ml-2 mt-3">
                        <p class="fw-bold">ফার্স্ট রেইস ইলেকট্রিক এর সহিত ভবিষ্যত ব্যবসায়ের সম্ভাবনা, মাসিক গড় (সেকেন্ডারি সেলস ফোরকাস্ট)</p>
                        <p><input type="text" name="probability_business_duration_withFirstrays"
                                class="form-control w-25"></p>
                        <p class="fw-bold">যৌথ-মালিকানা প্রতিষ্ঠানের ক্ষেত্রে মনোনীত প্রতিনিধি</p>
                        <div class="">
                            <div class="w-50 d-flex mt-3">
                                <label class="form-label w-25">নাম:</label>
                                <input type="text" name="partnership_distibutor_representative_name"
                                    placeholder="Name" class="form-control">
                            </div>
                            <div class="w-50 d-flex mt-3">
                                <label class="form-label w-25">ঠিকানা:</label>
                                <input type="text" name="partnership_distibutor_representative_address"
                                    class="form-control" placeholder="Address">
                            </div>
                            <div class="w-50 d-flex mt-3">
                                <label class="form-label  w-25">মোবাইল নাম্বার:</label>
                                <input type="text" name="partnership_distibutor_representative_mobile"
                                    class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>

                    <p class="px-4 mt-5">আমি ফার্স্ট রেইস ইলেকট্রনিক পরিবেশক পরিচালনার নীতিমালা পড়িয়া এবং নীতিমালার সহিত সজ্ঞেনে সম্মতি জ্ঞাপন করিলাম এবং পরিবেশক হওয়ার জন্য আবেদন করিলাম| আমাকে পরিবেশনা ব্যবসা পরিচালনার অনুমতি প্রদান করিয়া বাধিত করবেন|</p>

                    <div class="col-lg-12 d-flex">
                        <div class="col-lg-6">
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">মূল্যায়নকারীর স্বাক্ষর
                                    ..............</label>
                                <input type="file" name="assessment_person_image" accept="image/*"
                                    class="form-control w-50" placeholder="Mobile Number">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">নাম:</label>
                                <input type="text" name="assessment_person_name"
                                    class="form-control w-50" placeholder="নাম">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">পদবি:</label>
                                <input type="text" name="assessment_person_designation"
                                    class="form-control w-50" placeholder="পদবি">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">আইডি নাম্বার:</label>
                                <input type="text" name="assessment_person_nid"
                                    class="form-control w-50" placeholder="আইডি নাম্বার">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">আবেদনকারীর স্বাক্ষর
                                    ..............</label>
                                <input type="file" name="applicant_person_image" accept="image/*"
                                    class="form-control w-50">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">নাম:</label>
                                <input type="text" name="applicant_person_name"
                                    class="form-control w-50" placeholder="নাম">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">মোবাইল নাম্বার:</label>
                                <input type="text" name="applicant_person_mobile"
                                    class="form-control w-50" placeholder="পদবি">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">এরিয়া:</label>
                                <input type="text" name="applicant_person_area"
                                    class="form-control w-50" placeholder="আইডি নাম্বার">
                            </div>
                            <div class="d-flex mt-3">
                                <label class="form-label w-50">ডিভিশন:</label>
                                <input type="text" name="applicant_person_division"
                                    class="form-control w-50" placeholder="আইডি নাম্বার">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">জমা দিন</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            // alert('hello');
            i++;
            $('#toggle-row').append('<tr id="row' + i +
                '"><td>' + i +
                '</td><td><input type="text" name="partnership_distibutor_name[]" class="from-control"></td><td><input type="text" name="partnership_distibutor_address[]" class="from-control"> </td><td> <input type="text" name="partnership_distibutor_percentage[]" class="from-control"></td>"'
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

</script>
@endsection
