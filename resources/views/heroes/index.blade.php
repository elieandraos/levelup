@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">HEROES</h3>
            <card>
                <div slot="content">
                    <div id="listing" class="wrapper">
                        <table class='table in-card'>
                            <thead>
                            <tr>
                                <th class="td-md">Avatar</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            @foreach ($heroes as $hero)
                                <tr>
                                    <td class="td-md">
                                        <img src="{!! $hero->avatar !!}" style="width: 80px">
                                    </td>
                                    <td>{!! $hero->name !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
            </card>
        </div>
    </div>
@endsection
