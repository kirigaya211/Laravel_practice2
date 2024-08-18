<div class="form-group">
    <label for="title"></label>
    <input id="title" type="text" name="title" class="form-control" value="{{old('title', optional($post??null)->title)}}"></div>
    @error('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div  class="form-group"><label for="content"></label><input class="form-control" id="content" type="textarea" name="content" value="{{old('content', optional($post??null)->content)}}"></div>

    @if ($errors->any())
        <div class="mb-3">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif