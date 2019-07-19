@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">LANS</h3>
            @foreach ($lans as $lan)
            <card 
                title="{!! $lan->title !!}" 
                date="{!! $lan->human_date !!}" 
                button-link="{!! route('games.create', $lan->id)!!}" 
                button-value="Add New Game"
            >
                <div slot="content">
                    <div class="row">
                    	<div class="col-md-2">
                    		@foreach($lan->teamOne->players as $player)
                                <div class="py-1">{!! $player->gamer->name !!}</div>
                            @endforeach
                    	</div>
                        <div class="col-md-1">
                            <span style="display: block;font-weight: bold; margin: 0 auto;">VS</span>
                        </div>
                    	<div class="col-md-2">
                            @foreach($lan->teamTwo->players as $player)
                                <div class="py-1">{!! $player->gamer->name !!}</div>
                            @endforeach
                    	</div>
                        <div class="col-md-3">
                            <lan-games lan-id="{!! $lan->id !!}"></lan-games>
                        </div>
                        <div class="col-md-4">
                            <h5 class="@if($lan->team_one_score < $lan->team_two_score) text-danger @else text-success @endif d-inline px-2">
                                {!! $lan->teamOne->name !!} {!! $lan->team_one_score !!}</h5>
                            </h5>
                            <h5 class="@if($lan->team_two_score < $lan->team_one_score) text-danger @else text-success @endif d-inline px-2">
                                {!! $lan->teamTwo->name !!} {!! $lan->team_two_score !!}
                            </h5>

                        </div>
                    </div>
                </div>
            </card>
            @endforeach
        </div>
    </div>
@endsection
