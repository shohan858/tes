@extends('admin.base')
@section('konten')
@if (Auth::user()->role_id == 2)
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Landing Page</h1>
</div>
{{ Breadcrumbs::render('home') }}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tampilan Landing Page</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1 col-sm-12 col-lg-1 col-xl-1">
                        <div class="card-body" style="">
                           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-12 col-lg-11 col-xl-11">
                        <h5 class="card-header">Preview</h5>
                        <iframe style="border: 1px solid gray;" id="previews" src="{{url('/testing')}}"
                                frameborder="0"
                                marginheight="0"
                                marginwidth="0"
                                width="100%"
                                height="90%"
                                scrolling="auto">
                            </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@else

@endif


{{-- Modal --}}
    @endsection