@if ($errors->any())
    <div class="alert alert-danger alert-dismissible bg-primary" role="alert" style="color: #fff">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <em>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </em>
    </div>
@endif
