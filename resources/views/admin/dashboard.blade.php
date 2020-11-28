@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
        <div>
            <div class='col-sm-6'>

                <h4 class='admin_title'>Hero Image</h4>
                <button id='home_hero_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='hero_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" name="hero_upload" id="hero_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_image'>
                    <img src="{{ asset('storage/'.$heroImage[0]['image']) }}"  class='admin_hero_image' id='hero_view'>
                </div>
            </div>
            <div class='col-sm-6' style='clear:both;'>

                <h4 class='admin_title mt_20'>Introduction</h4>
                    
                <button id='home_introduction_save' class='admin_save'>save</button>
                    
                <textarea name="" id="admin_home_introduction" class='admin_introduction'>{{$introduction[0]['text']}}</textarea>
            </div>
            

            <h4 class='admin_title ml_15 mt_20'>Interior</h4>

            <div id='interior' style='clear:both;' class='col-12 row'>

                @foreach ($interiors as $interior)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='' class='admin_save'>save</button>
                        <span class="change_btn fileinput-button" id="home_interior_{{$interior->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" name="hero_upload" id="home_interior_upload_{{$interior->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="interior_uploaded_image_{{$interior->id}}">
                            <img src="{{ asset('storage/'.$interior->image) }}"  class='admin_hero_image' id="interior_view_{{$interior->id}}">
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
</div>



@endsection