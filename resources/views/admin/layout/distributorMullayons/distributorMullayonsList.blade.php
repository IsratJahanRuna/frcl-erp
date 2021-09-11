@extends('admin.master')
@section('css')

<style>

.customImg
{
    height: 70px;
    width: 70px;
    border-radius: 3px !important;
}
</style>

@endsection
@section('content')


<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                @if(Session::has('msg'))
                    <p class="alert alert-icon alert-success">{{ Session::get('msg') }}</p>
                @endif
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Distributor Mullayon List</h3>
                        </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <li class="nk-block-tools-opt">
                                        <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                        <a href="{{ route('distributorm.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add New Distributor</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                   <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <b>SL</b>
                                            </div>
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">Distributor Name</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Contact</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Division</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Zone</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Base</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($distributor_mullayons as $key=>$data)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">{{ $key+1 }}</div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">{{ $data->applicant_person_name }}</div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">{{ $data->applicant_person_mobile }}</div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                @if (!empty($data->distributor_division))
                                                    {{ Devfaysal\BangladeshGeocode\Models\Division::find($data->distributor_division)->name }}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                @if (!empty($data->distributor_zone))
                                                    {{ Devfaysal\BangladeshGeocode\Models\Division::find($data->distributor_division)->name }}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                @if (!empty($data->distributor_base))
                                                    {{ Devfaysal\BangladeshGeocode\Models\Division::find($data->distributor_division)->name }}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="{{ route('distributorm.view', $data->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href=""><em class="icon ni ni-repeat"></em><span>Deletet</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <!-- Modal Image -->
                                        <div class="modal fade zoom" tabindex="-1" id="modalImage{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-body">
                                                    @if(!empty($data->image_distributot))
                                                    <p><img src="{{ asset('public/assets/images/distributor/'.$distributor->image_distributot ) }}" height="300px" width="400px"></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Modal End -->
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- content @e -->


@endsection

