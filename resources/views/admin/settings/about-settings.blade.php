@section('metatitle',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Description'))
@section('title','About Us Settings')
@extends('admin.main')
@section('content')

<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
        @include('admin.message')
        <form id="AboutSettingsForm" action="{{route('admin.SaveSettings','about-settings')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="About_Settings" name="Settings_Type">
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">About Us Settings</div>
                        </div>
                    </header>
                    <div class="card-text h-full">
                        <div>
                            <div class="tab-content" id="pills-tabContentHorizontal">
                                <div class="tab-pane fade show active" id="pills-seoHorizontal" role="tabpanel" aria-labelledby="pills-profile-tabHorizontal">
                                    <div class="form-group py-2">
                                        <label for="MetaTitle">Meta Title</label>
                                        <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{Get_Meta_Tag_Value('About_Settings','Meta_Title')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="MetaKeyword">Meta Keyword</label>
                                        <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{Get_Meta_Tag_Value('About_Settings','Meta_Keyword')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="MetaDescription">Meta Description</label>
                                        <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description" value="{{Get_Meta_Tag_Value('About_Settings','Meta_Description')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection