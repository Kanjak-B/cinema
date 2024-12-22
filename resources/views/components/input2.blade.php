<div class="form-group">
    <input 
        class="form-control @error((string) $name) is-invalid @enderror" 
        type="{{$type}}" 
        name="{{$name}}" 
        placeholder="{{$placeholder}}"
        value="{{old($name)}}">
</div>