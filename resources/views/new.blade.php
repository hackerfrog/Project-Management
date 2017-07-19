@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<div class="panel panel-default new">
    			<div class="panel-heading">New Project</div>
    			<div class="panel-body">
    				<div class="row">
    					<div class="col-md-8 col-md-offset-2">
		    				<div class="detail text-center">A project is a collection of cards ordered in a list of boards. Use it to manage a project, track a collection, or organize anything.</div>
    					</div>
    				</div>
    				<form class="form-horizontal" method="POST" action="{{ route('new') }}" style="margin-top: 12px;">
    					{{ csrf_field() }}
    					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
    					</div>

    					<div class="form-group">
    						<label for="detail" class="col-md-4 control-label">Detail</label>

    						<div class="col-md-6">
    							<textarea id="detail" class="form-control" row="3" name="detail" value="{{ old('detail') }}"></textarea>
    						</div>
    					</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-main">
                                    Create Project
                                </button>
                            </div>
                        </div>

    				</form>
    			</div>	
    		</div>
    	</div>
    </div>
</div>
@endsection
