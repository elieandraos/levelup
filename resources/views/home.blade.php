@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <card>
                <div slot="content">
                    <lan-creator
                        :gamers="{{ json_encode($gamers) }}"
                    ></lan-creator>
                </div>
            </card>
        </div>
    </div>
@endsection
