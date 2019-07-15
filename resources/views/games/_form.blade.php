<div class="row">
	
	<!-- Team one score -->
	<div class="form-group{{ $errors->has('team_one_score') ? ' has-error' : '' }} col-md-4">
	    <label for="team_one_score" class="control-label">'{!! $lan->teams[0]->name !!}' total kills <span class="required">*</span></label>

	    <div>
	        {!! Form::number('team_one_score', null, [ 'class' => 'form-control', 'id' => 'team_one_score', 'min' => 0] ) !!}
	        @if ($errors->has('team_one_score'))
	            <span class="help-block">{{ $errors->first('team_one_score') }}</span>
	        @endif
	    </div>
	</div>

	<!-- Team two score -->
	<div class="form-group{{ $errors->has('team_two_score') ? ' has-error' : '' }} col-md-4">
	    <label for="team_two_score" class="control-label">'{!! $lan->teams[1]->name !!}' total kills <span class="required">*</span></label>

	    <div>
	        {!! Form::number('team_two_score', null, [ 'class' => 'form-control', 'id' => 'team_two_score', 'min' => 0] ) !!}
	        @if ($errors->has('team_two_score'))
	            <span class="help-block">{{ $errors->first('team_two_score') }}</span>
	        @endif
	    </div>
	</div>

	<!-- Winner Team -->
	<div class="form-group{{ $errors->has('winner_team_id') ? ' has-error' : '' }} col-md-4">
	    <label for="winner_team_id" class="control-label">Winner</label>

	    <div>
	        {!! Form::select('winner_team_id', $teams, null, ['placeholder' => 'Select winning team', 'class' => 'form-control selectpicker']) !!}
	        @if ($errors->has('winner_team_id'))
	            <span class="help-block">{{ $errors->first('winner_team_id') }}</span>
	        @endif
	    </div>
	</div>
</div>
