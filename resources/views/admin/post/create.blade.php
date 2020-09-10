@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">

                        @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <form method="post" action="{{ route('post.store') }} ">
                            <div class="form-group">

                                @csrf
                                <textarea class="form-control" name="content" rows="6" id="editor" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create post"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
