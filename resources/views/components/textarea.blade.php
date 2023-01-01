<div class="form-group">
    <label for="{{$field}}">Subject</label>
    <textarea name="{{$field}}" id="{{$field}}" placeholder="{{$placeholder ?? ''}}" rows="{{$row}}" cols="{{$col}}" class="form-control" >@isset($value){{old($field) ? old($field) : $value}}
    @else{{old($field)}}@endisset</textarea>
    @error($field)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>