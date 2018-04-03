@extends('layouts.app')

@section('title', 'Add a banner')

@section('content')
<div id="add-banner" class="container">
    @include('layouts.flash_message')
    {{ Breadcrumbs::render('store.add_banner') }}
    <div class="row">
        <div class="col-md-3">
            @include('layouts.menus.internal_menu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Add a banner</div>
                <div class="panel-body">
                    <form action="{{ route('store.banner.add.image') }}" class="dropzone" id="storefront-banner">
                        {{ csrf_field() }}
                    </form>
                    <hr />
                    <h3>Preview</h3>
                    <div id="banner">
                        <p class="text-muted">Your preview will appear once you have uploaded a banner.</p>
                        @if(Auth::user()->store->banner_url)
                            <img src="{{ Auth::user()->store->banner_url }}" />
                        @else
                            <img src="" />
                        @endif
                    </div>
                    <form action="{{ route('store.banner.add') }}" method="POST">
                        {{ csrf_field() }}
                        <input name="image" type="hidden" />
                        <button class="btn btn-primary">Upload Banner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        Dropzone.options.storefrontBanner = {
            paramName: 'file',
            maxFilesize: 4, // MB
            maxFiles: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            init: function() {
                this.on("success", function(file, response) {
                    var image = document.querySelector('input[name=image]');
                    image.value = response.file_name;
                    $('#banner img').attr('src',response.source_file);
                });

                this.on("error", function(file, response) {
                    alert(response);
                });
            }
        };
    </script>
@endsection