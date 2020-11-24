@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
        <div>
            <div class='col-sm-6'>

                <h4 class='admin_title'>Hero Image</h4>
                    
                <span class="change_btn fileinput-button">
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" name="hero_upload" id="hero_upload" required="" onchange='readURL(this)'>
                </span>
                <button id='home_hero_save'>save</button>
                    
                <div style='padding:0;width:100%;margin-top:20px;' id='uploaded_image'>
                    <img src="{{ asset('storage/'.$heroImage[0]['image']) }}"  class='admin_hero_image' id='hero_view'>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection