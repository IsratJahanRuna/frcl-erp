@extends('admin.master')
@section('css')

<style>

.heading {
            font-family: "Montserrat", Arial, sans-serif;
            font-size: 4rem;
            font-weight: 500;
            line-height: 1.5;
            text-align: center;
            padding: 3.5rem 0;
            color: #1a1a1a;
        }

        .heading span {
            display: block;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            /* Compensate for excess margin on outer gallery flex items */
            margin: -1rem -1rem;
        }

        .gallery-item {
            /* Minimum width of 24rem and grow to fit available space */
            flex: 1 0 24rem;
            /* Margin value should be half of grid-gap value as margins on flex items don't collapse */
            margin: 1rem;
            box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
            overflow: hidden;
        }

        .gallery-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 400ms ease-out;
        }

        .gallery-image:hover {
            transform: scale(1.15);
        }


        @supports (display: grid) {
            .gallery {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
                grid-gap: 2rem;
            }

            .gallery,
            .gallery-item {
                margin: 0;
            }
        }
        .custom-avatar {
            width: 50px!important;
            height: auto!important;
        }
        .custom-avatar img {
            border-radius: 3px;
        }
        .card-body {
            padding: 0px!important;
        }
        .link-list-opt .custom_btn .icon {
            font-size: 1.125rem;
            width: 1.75rem;
            opacity: .8;
            margin-right: 3px;
        }
        .link-list-opt .custom_btn:hover {
            color: #854fff;
            background: #f5f6fa;
        }
        .link-list-opt .custom_btn:focus {
            outline: none;
        }
        .link-list-opt .custom_btn {
            display: flex;
            align-items: center;
            padding: .625rem 1.0rem;
            font-size: 12px;
            font-weight: 500;
            color: #526484;
            transition: all .4s;
            line-height: 1.3rem;
            position: relative;
            background: transparent;
            border: none;
            width: -webkit-fill-available;
        }
        .view_img {
            max-width: 100%!important;
            /*margin: 1.75rem!important;*/
            justify-content: center;
        }
        .view_img_modal {
            padding-right: 0px!important;
        }
        .custom-banner-row {
            padding: 20px;
        }
        .tb-lead {
            font-size: 12px;
            font-weight: 400;
        }
        .custom_date {
            font-size: 12px!important;
        }
        .custom-user-card {
            display: contents;
        }
        .custom-user-info {
            margin-top: 5px;
            margin-left: 0px!important;
        }
        .small-txt {
            margin-bottom: 10px;
            color: #b7c2d0;
            font-style: italic;
        }
        .borderless td, .borderless th {
            border: none;
        }
        .borderless td {
            padding: 2px 10px;
        }
        .page-title {
        	font-size: 17px!important;
        }
        .nk-tb-list td {
        	padding-top: 5px;
        	padding-bottom: 5px;
        }
    </style>

@endsection

@section('content')

@section('content')
     <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title" style="font-size: 25px;">{{ $user->name }}'s Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="float-left">
                                    <div class="mb-5">
                                        <img src="{{ asset('public/assets/images/user/'.$user->image) }}" alt="image" style="width:150px; height:150px;" class="rounded-circle img-thumbnail ">
                                    </div>
                                	<table class="table borderless">
                                        <tr style="vertical-align: initial;">
                                            <td><b>Name:</b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Email</b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Mobile </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->contact }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Role </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->role->name }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Date of Birth </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->dob }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>NID </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->nid }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Company Name </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->companyName }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Address </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Join Date </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->joinDate }}</td>
                                        </tr>
                                        <tr style="vertical-align: initial;">
                                            <td><b>Department </b></td>
                                            <td><b>:</b></td>
                                            <td>{{ $user->department }}</td>
                                        </tr>

                                        <tr style="vertical-align: initial;">
                                            <td><b>Status</b></td>
                                            <td><b>:</b></td>
                                            <td>
                                                @if ($user->status == 1)
                                                    Active
                                                @else
                                                    Inactive
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



