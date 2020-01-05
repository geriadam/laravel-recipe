@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-users"></i></span>List Post</h4>
        <a href="{{ route('backend.master.post.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Create Post</a>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datatables" class="table table-hover table-bordered text-center w-100 display">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Tags</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key => $post)
                            <tr>
                                <td>{!! $post->title !!}</td>
                                <td>{!! $post->slug !!}
                                <td>{!! $post->tags !!}</td>
                                <td>
                                    <a href="{{ route('backend.master.post.edit', $post) }}" class="btn btn-warning btn-xs btn-rounded"><i class="icon-pencil"></i> Edit</a>
                                    <a href="{{ route('backend.master.post.destroy', $post) }}" id="btn-delete" class="btn btn-danger btn-xs btn-rounded"><i class="icon-trash"></i> Delete</a>
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
