@extends('admin.master')
@section('css')

@endsection

@section('content')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">


                        @if(Session::has('msg'))
                            <p class="alert alert-success">{{ Session::get('msg') }}</p>
                        @endif



                        <h3 class="nk-block-title page-title">Base List</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        Total Base : {{ $total_base }}
                                        <br>
                                        Active Base : {{ $active }}
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col nk-tb-col-check">
                                            SL
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">Base Name</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Bangla Name</span></th>
                                        {{-- <th class="nk-tb-col tb-col-mb"><span class="sub-text">District Name</span></th> --}}
                                        {{-- <th class="nk-tb-col tb-col-mb"><span class="sub-text">URL</span></th> --}}
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bases as $key=>$base)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            {{ $key+1 }}
                                        </td>
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-info">
                                                    <span class="tb-lead">
                                                        {{$base->name}}
                                                    <span class="dot dot-success d-md-none ml-1"></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                            <span class="tb-amount">
                                                {{$base->bn_name}}
                                            <span class="currency"></span></span>
                                        </td>
                                        {{-- <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                            <span class="tb-amount">
                                                {{ $base->district->name }}
                                            <span class="currency"></span></span>
                                        </td>

                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                            <span class="tb-amount">
                                                {{$base->url}}
                                            <span class="currency"></span></span>
                                        </td> --}}
                                        @if($base->status==1)
                                        <td class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Active</span>
                                        </td>
                                        @else
                                        <td class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-danger">InActive</span>
                                        </td>
                                        @endif
                                        @if($base->status)
                                        <td class="nk-tb-col tb-col-lg">
                                        <form action="{{ route('base.active', $base->id) }}" method="post">
                                        @csrf
                                            <span>
                                            <button type="submit" class="btn btn-outline-warning">InActive</button>
                                            </form>
                                            </span>
                                        </td>
                                        @else
                                        <td class="nk-tb-col tb-col-lg">
                                        <form action="{{ route('base.active', $base->id) }}" method="post">
                                        @csrf
                                            <span>
                                            <button type="submit" class="btn btn-outline-success">Active</button>
                                            </form>
                                            </span>
                                        </td>
                                        @endif
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">

                                                            <!-- @if(Auth::user()->role == "Admin")
                                                                <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
                                                            @endif -->

                                                                <li><a href="#modalUpdate{{$base->id}}" data-toggle="modal"><em class="icon ni ni-repeat"></em><span>Edit</span></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr><!-- .nk-tb-item  -->

                                    <!-- Update Modal -->
                                    <div class="modal fade" tabindex="-1" id="modalUpdate{{$base->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Base Info</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('user.base.update', $base->id)}}" class="form-validate is-alter" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row g-gs">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                <label class="form-label" for="fv-email">Base Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="fv-email" name="name" value="{{$base->name}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                <label class="form-label" for="fv-email">Bangla Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="email" class="form-control" id="fv-email" name="bn_name" value="{{$base->bn_name}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-outline-primary">Update Base</button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <span class="sub-text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Update modal End -->


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
