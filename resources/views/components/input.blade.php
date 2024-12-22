<div class="row g-3 align-items-center m-2">
    <div class="col-auto">
      <label for="{{$label}}" class="col-form-label">{{$label}}</label>
    </div>
    <div class="col-auto">
      <input type="{{$type}}" id="{{$label}}" name="{{$name}}" @if($name=='title') autofocus @endif value="{{ old($name) }}" class="form-control @error($name) is-invalid @enderror" aria-describedby="{{$type}}HelpInline">
    </div>
    <div class="col-auto">
      <span id="{{$type}}HelpInline" class="form-text">
        {{$instructions}}
      </span>
    </div>
</div>