@section('metatitle',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Title'))
@section('metakeyword',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Keyword'))
@section('metadescription',Get_Meta_Tag_Value('Casestudies_Settings','Meta_Description'))
@section('title','Contact Settings')
@extends('admin.main')
@section('content')

<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
        @include('admin.message')
        <form id="ContactSettingsForm" action="{{route('admin.SaveSettings','contact-settings')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="Contact_Settings" name="Settings_Type">
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Contact Settings</div>
                        </div>
                    </header>
                    <div class="card-text h-full">
                        <div>
                            <ul class="nav nav-pills flex items-center flex-wrap list-none pl-0 mb-6 space-x-4 " id="pills-tabHorizontal" role="tablist">
                                <li class="nav-item text-center" role="presentation">
                                    <a href="#pills-contentHorizontal" class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 active dark:bg-slate-900 dark:text-slate-300" id="pills-home-tabHorizontal" data-bs-toggle="pill" data-bs-target="#pills-contentHorizontal" role="tab" aria-controls="pills-contentHorizontal" aria-selected="true">Content</a>
                                </li>
                                <li class="nav-item text-center" role="presentation">
                                    <a href="#pills-seoHorizontal" class="nav-link block font-medium font-Inter text-sm leading-tight capitalize rounded-md px-6 py-3 focus:outline-none focus:ring-0 dark:bg-slate-900 dark:text-slate-300" id="pills-profile-tabHorizontal" data-bs-toggle="pill" data-bs-target="#pills-seoHorizontal" role="tab" aria-controls="pills-seoHorizontal" aria-selected="false">SEO</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContentHorizontal">
                                <div class="tab-pane fade show active" id="pills-contentHorizontal" role="tabpanel" aria-labelledby="pills-home-tabHorizontal">

                                    <div class="card">

                                        <div class="card-body px-6 pb-6">
                                            <div class="overflow-x-auto -mx-6">
                                                <div class="inline-block min-w-full align-middle">
                                                    <div class="overflow-hidden ">
                                                        <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                            <thead class="bg-slate-200 dark:bg-slate-700">
                                                                <tr>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Sl No') }}
                                                                    </th>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Name') }}
                                                                    </th>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Email') }}
                                                                    </th>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Mobile No') }}
                                                                    </th>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Subject') }}
                                                                    </th>
                                                                    <th scope="col" class="table-td w-20">
                                                                        {{ __('Delete') }}
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                                @forelse ($contacts as $item)
                                                                <tr>
                                                                    <td class="table-td">
                                                                        # {{ $item->id }}
                                                                    </td>
                                                                    <td class="table-td">
                                                                        <div class="flex items-center">

                                                                            <div class="flex-1 text-center">
                                                                                <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                    {{ $item->name }}
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table-td">
                                                                        {{ $item->email }}
                                                                    </td>
                                                                    <td class="table-td">
                                                                        {{ $item->phone }}
                                                                    </td>
                                                                    <td class="table-td">
                                                                        {{ $item->subject }}
                                                                    </td>
                                                                    <td class="table-td">
                                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                                            <!-- <a class="action-btn" href="{{ route('admin.editContact',$item->id) }}">
                                                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                            </a> -->
                                                                            <a class="action-btn" href="{{ route('admin.deleteContact',$item->id) }}">
                                                                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @empty

                                                                <tr class="border border-slate-100 dark:border-slate-900 relative">
                                                                    <td class="table-cell text-center" colspan="5">
                                                                        <h2 class="text-xl text-slate-700 mb-8 mt-4">{{ __('No Contact found.') }}</h2>
                                                                    </td>
                                                                </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-seoHorizontal" role="tabpanel" aria-labelledby="pills-profile-tabHorizontal">
                                    <div class="form-group py-2">
                                        <label for="MetaTitle">Meta Title</label>
                                        <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{Get_Meta_Tag_Value('Contact_Settings','Meta_Title')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="MetaKeyword">Meta Keyword</label>
                                        <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{Get_Meta_Tag_Value('Contact_Settings','Meta_Keyword')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="MetaDescription">Meta Description</label>
                                        <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description" value="{{Get_Meta_Tag_Value('Contact_Settings','Meta_Description')}}">
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