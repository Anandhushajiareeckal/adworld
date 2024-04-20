@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add Event </h5>
                    <form class="form-floating" action="{{route('achievement_update',['id'=>$achievement_list->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" value="{{$achievement_list->heading}}" id="TextInput" placeholder="Name" name="heading" required>
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">

                                <textarea class="form-control" id="TextInput" placeholder="" value="" name="description" required cols="30" rows="50">{{$achievement_list->description}}</textarea>
                                <label class="" for="TextInput">Description</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/admin/achievement" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
