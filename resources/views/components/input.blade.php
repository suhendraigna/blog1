<div class="form-group">
    <label for="{{$field}}">{{$label}}</label>
    <input type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}" value="{{old($field)}}">
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>