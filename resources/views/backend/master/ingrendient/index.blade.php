@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-users"></i></span>List Ingrendient</h4>
        <a href="{{ route('backend.master.ingrendient.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Create Ingrendient</a>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datatables" class="table table-hover table-bordered text-center w-100 display nowrap">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingrendients as $key => $ingrendient)
                            <tr>
                                <td>
                                    @if(!empty($ingrendient->image))
                                        <img src="{{ asset($ingrendient->image_url) }}" width="40px" height="40px"></td>
                                    @endif
                                <td>{{ $ingrendient->name }}</td>
                                <td>{{ $ingrendient->slug }}</td>
                                <td>
                                    <a href="{{ route('backend.master.ingrendient.edit', $ingrendient) }}" class="btn btn-warning btn-xs btn-rounded"><i class="icon-pencil"></i> Edit</a>
                                    <a href="{{ route('backend.master.ingrendient.destroy', $ingrendient) }}" id="btn-delete" class="btn btn-danger btn-xs btn-rounded"><i class="icon-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
