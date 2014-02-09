@extends('layout')

@section('html_title')
Edit Shortlink
@stop

@section('content')
    <div class="row">
      <div class="large-12 columns">
        <h2>Edit Shortlink</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
          <p>Please note that this is a basic interface and that bugs are expected. Shortlinks are accessed via http://link.up-ame.org/yourshortlinkname.</p>
      	</div>
      </div>
    </div>


	{{ Form::model($link, array('url' => '/admin/edit/' . $link->id, 'id' => 'form')) }}

	<div class="row">
		<div class="large-12 columns">
			<label>Shortlink name</label>
			{{ Form::text('shortlink') }}
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<label>Redirect to</label>
			{{ Form::text('url') }}
		</div>
	</div>

	{{ Form::close() }}

      <div class="row">
	<div class="small-3 columns">
          <div class="row">
            <div class="small-6 columns">
              <a onclick="document.getElementById('form').submit();" class="button small radius success">Submit</a>
            </div>
            <div class="small-6 columns">
              <a onclick="document.getElementById('form').reset();" class="button small radius">Reset</a>
            </div>
          </div>
        </div>
	<div class="small-9 columns">
        </div>
      </div>
    </form>
@stop
