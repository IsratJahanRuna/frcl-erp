@extends('admin.master')
@section('css')

<style>

.customImg
{
    height: 70px;
    width: 70px;
}

.tb_range
{
    width: 10%;
}

.product-distance
{
    width: 50px;
}

.button_side
{
    float: right;
}



</style>

@endsection
@section('content')



<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                            <center><h6 class="title nk-block-title">Product List</h6><hr></center><br>
                                <form method="post" action="{{route('product.search')}}" class="form-validate" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-gs">
                                <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-control-wrap ">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-control-wrap ">
                                       
                                    </div>
                                </div>
                            </div><div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-control-wrap ">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-control-wrap ">
                                        <a href="{{route('product.add')}}" class="btn btn-icon btn-primary d-md-none" ><em class="icon ni ni-plus"></em></a>
                                        <a href="{{route('product.add')}}" class="btn btn-primary d-none d-md-inline-flex" ><em class="icon ni ni-plus"></em><span>Add New Product</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Category</label>
                                        <div class="form-control-wrap ">
                                            <select id="category_name" name="sub_category_id" data-placeholder="Select a option" >
                                                <option value="">Select Name</option>
                                                @foreach($categories as $category)
                                                    @if($category->sub_category != 0)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="form-label" for="fv-topics">Product</label>
                                        <div class="form-control-wrap ">
                                            <select id="product_name" name="product_id" data-placeholder="Select a option" >
                                                <option value="">Select Name</option>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Search</label>
                                    <div class="form-control-wrap ">
                                        <button type="submit" class="btn btn-success"> View  </button>
                                    </div>
                                </div>
                            </div>
                    </form>

                        </div>
                        
                    </div><!-- .card-tools -->
                </div><!-- .card-title-group -->
            </div><!-- .card-inner -->

            @if($products->count() > 0)
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="card card-stretch">
                            <div class="card-inner-group">
                                <hr>
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                        <div class="btn-wrap">
                                            <!-- <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled" style="background:red; color:black;"><b>print</b></button></span>
                                            <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span> -->
                                        </div>
                                    <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">SL</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Product Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Category</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">DP</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">TP</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">MRP</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                                
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach($products as $key=>$product)

                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>
                                                    {{ $key+1 }}
                                                </span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary" style="background:none;">
                                                        <span>
                                                        @if(!empty($product->image))
                                                            <img class = "customImg" src="{{ asset('public/assets/images/product/'.$product->image) }}" ></span>
                                                        @endif
                                                        </span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $product->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>
                                                    {{ $product->category->name }}
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>
                                                    &#2547; {{ $product->distributor_price }}
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>
                                                    &#2547; {{ $product->trade_price }}
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>
                                                    &#2547; {{ $product->corporate_price }}
                                                </span>
                                            </div>
                                            
                                           
                                            
                                            @if($product->status==1)
                                                <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">Active</span>
                                                </div>
                                            @else
                                                <div class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-danger">InActive</span>
                                                </div>
                                            @endif
                                            
                                            
                                            <div class="nk-tb-col">
                                                @if($product->status)
                                                    <form action="{{ route('product.active', $product->id) }}" method="post">
                                                    @csrf
                                                        <span>
                                                            <button type="submit" class="btn btn-warning btn-sm">InActive</button>
                                                        </span>
                                                    </form>
                                                @else
                                                    <form action="{{ route('product.active', $product->id) }}" method="post">
                                                    @csrf
                                                        <span>
                                                            <button type="submit" class="btn btn-success btn-sm">Active</button>
                                                        </span>
                                                    </form>
                                                @endif
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="{{route ('product.details' , $product->id) }}"><em class="icon ni ni-eye"></em>
                                                                    <span>View Details</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route ('product.edit', $product->id) }}"><em class="icon ni ni-repeat"></em>
                                                                    <span>Edit Products</span></a>
                                                            </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @endforeach
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
<!-- content @e -->



@endsection

@section('js')

<script type="text/javascript">

        $("#category_name").select2({
        });
        
        $("#product_name").select2({
        });
</script>

@endsection