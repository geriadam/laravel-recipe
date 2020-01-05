@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-users"></i></span>List Newsletter</h4>
        <a href="{{ route('backend.master.newsletter.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Create Newsletter</a>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datatables" class="table table-hover table-bordered text-center w-100 display nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newsletters as $key => $newsletter)
                            <tr>
                                <td>{{ $newsletter->name }}</td>
                                <td>{{ $newsletter->email }}</td>
                                <td>
                                    <a href="{{ route('backend.master.newsletter.edit', $newsletter) }}" class="btn btn-warning btn-xs btn-rounded"><i class="icon-pencil"></i> Edit</a>
                                    <a href="{{ route('backend.master.newsletter.destroy', $newsletter) }}" id="btn-delete" class="btn btn-danger btn-xs btn-rounded"><i class="icon-trash"></i> Delete</a>
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
