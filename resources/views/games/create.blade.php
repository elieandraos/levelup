@extends('layouts.app')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('games.store', $lan->id) }}">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <h3 class="title">LANS</h3>
            </div>

            <div class="col-md-12">
                <card title="New game for LAN {!! $lan->title !!}">
                    <div slot="content">
                            @include('games._form')
                        </form>
                    </div>
                </card>
            </div>
            
            <div class="col-md-12">
                <card title="'{!! $lan->teamOne->name !!}' players stats">
                    <div slot="content">
                        @include('games._team_players', ['players' => $lan->teamOne->players])
                    </div>
                </card>
            </div>

            <div class="col-md-12">
                <card title="'{!! $lan->teamTwo->name !!}' players stats">
                    <div slot="content">
                        @include('games._team_players', ['players' => $lan->teamTwo->players])
                    </div>
                </card>
            </div>
  
            <div class="mx-auto">
                <form-buttons back-url="{!! route('lans.index') !!}"></form-buttons>
            </div>

        </div>
    </form>
@endsection
