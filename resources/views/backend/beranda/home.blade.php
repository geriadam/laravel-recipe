@extends('backend.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-4 col-sm-6">
        <div class="card card-sm">
            <div class="card-body">
                <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Category</span>
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div>
                        <span class="d-block display-5 font-weight-400 text-dark">{{ $category_count }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card card-sm">
            <div class="card-body">
                <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Recipe</span>
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div>
                        <span class="d-block display-5 font-weight-400 text-dark">{{ $recipe_count }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
