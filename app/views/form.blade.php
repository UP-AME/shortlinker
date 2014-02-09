@extends('layout')

@section('html_title')
Create Shortlink
@stop

@section('content')
    <div class="row">
      <div class="large-12 columns">
        <h2>Shortlink Creation Form</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
          <p>Please note that this is a basic interface and that bugs are expected.<br /><br />Shortlinks are accessed via <a>http://link.up-ame.org/yourshortlinkname</a> for public links and <a>http://link.up-ame.org/internal/yourshortlinkname</a> for internal links.</p>
      	</div>
      </div>
    </div>

    <form id="form" method="post" action="/admin/add">
      <div class="row">
	<div class="large-12 columns">
	  <label>Shortlink name</label>
	  <input type="text" name="shortlink" placeholder="AMEShopOrderForm (case-insensitive)" />
	</div>
      </div>
      <div class="row">
	<div class="large-12 columns">
	  <label>Redirect to</label>
	  <input type="text" name="url" placeholder="http://www.google.com/" />
	</div>
      </div>
	<div class="row">
		<div class="large-12 columns">
			<label>Public link?</label>
			{{ Form::checkbox('public', 'public', true) }}
		</div>
	</div>
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
