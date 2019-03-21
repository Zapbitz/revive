@extends('layouts.main')

@section('content')
<div class="container bg-white p-3"> 
    <h2 class="text-center text-info">Create Private Journal</h2>
        <form action="/privatejournal/{{$pjournal->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                  <label for="keyNote">Key Notes</label>
                    <textarea class="form-control" id="keyNote" name="key_note" rows="3">{{$pjournal->key_note}}</textarea>
                </div>
                <button type="submit" class="btn btn-info btn-block">Submit</button>
</form>
</div>
@endsection