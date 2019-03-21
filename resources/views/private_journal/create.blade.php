@extends('layouts.main')

@section('content')
<div class="container bg-white p-3"> 
    <h2 class="text-center text-info">Create Private Journal</h2>
        <form action="/privatejournal" method="POST">
            @csrf
                <div class="form-group">
                  <label for="clientID">Choose a client</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="clientID" name="client_id">
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}}</option> 
                    @endforeach
                  </select>
                </div>
        
                <div class="form-group">
                  <label for="keyNote">Key Notes</label>
                  <textarea class="form-control" id="keyNote" name="key_note" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-info btn-block">Submit</button>
</form>
</div>
@endsection