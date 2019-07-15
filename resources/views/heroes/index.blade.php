@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">HEROES</h3>
        </div>

        @foreach($heroes as $hero)
            <div class="col-md-3">
                <card class="heroes identity">
                    <div slot="content">
                        <table>
                            <tr>
                                <td class="image"><img src="{!! $hero->avatar !!}"></td>
                                <td>
                                    <h6>{!! $hero->name !!}</h6>
                                    Games played: <strong>0</strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </card>
            </div>
        @endforeach
@endsection
