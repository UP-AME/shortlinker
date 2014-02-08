@extends('layout')

@section('html_title')
View All Shortlinks
@stop

@section('content')
<div class="row">
  <div class="large-12 columns">
	<h2>Shortlinks</h2>
  </div>
</div>
<div class="row">
<div class="large-12 columns">
<form id="form" method="post" action="/admin/view">
<input type="hidden" name="id" id="toggle" />
<table>
  <thead>
    <tr>
      <th>Shortlink</th>
      <th>Redirect URL</th>
      <th width="600">Actions</th>
    </tr>
  </thead>
  <tbody>
	@foreach($links as $link)
    <tr>
      <td>{{ $link->shortlink }}</td>
      <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
      <td>
        <a class="button tiny round">Edit</a>
        &nbsp;
		@if ($link->active)
          <a onclick="document.getElementById('toggle').value = {{ $link->id }}; document.getElementById('form').submit();" class="button tiny alert round">Disable</a>
        @else
          <a onclick="document.getElementById('toggle').value = {{ $link->id }}; document.getElementById('form').submit();" class="button tiny success round">Enable</a>
        @endif
      </td>
    </tr>
	@endforeach
  </tbody>
</table>
</form>
</div>
</div>


@stop
