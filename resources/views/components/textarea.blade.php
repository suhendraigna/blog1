<div class="form-group">
    <label for="{{$field}}">Subject</label>
    <textarea name="{{$field}}" id="{{$field}}" rows="{{$row}}" cols="{{$col}}" class="form-control" >{{old($field)}}</textarea>
    @error($field)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>