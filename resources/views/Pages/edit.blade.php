
@extends('Pages.welcome')

@section('content')

<form method="post" action="/artikel/{{$items->id_artikel}}" >
@csrf
@method('PUT')
<label>id_artikel</label>
<input type="text" name="id_artikel" value="{{$items->id_artikel}}" class="form-control" />
<br />
<label>Judul</label>
<input type="text" name="judul" value="{{$items->judul}}" class="form-control"/>
<br />
<label>isi </label>
<input type="text" name="isi" value="{{$items->isi}}" class="form-control" />
<br />
<label>slug</label>
<input type="text" name="slug" value="{{$items->slug}}" class="form-control" />
<br />
<label>TAG</label>
<input type="text" name="tag" value="{{$items->tag}}" class="form-control" />
<br />
<label>id_user</label>
<input type="text" name="id_user" value="{{$items->id_user}}" class="form-control" />
<br />

<input type="submit" value="Update" class="btn btn-primary my-1" />
</form>


@endsection

