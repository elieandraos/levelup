@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">GAMERS</h3>
            <card>
                <div slot="content">
                    <div id="listing" class="wrapper">
                        <table class='table in-card'>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Nickname</th>
                                </tr>
                            </thead>
                            @foreach ($gamers as $gamer)
                                <tr>
                                    <td>{!! $gamer->name !!}</td>
                                    <td>{!! $gamer->nickname !!}</td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </card>
        </div>
    </div>
@endsection
