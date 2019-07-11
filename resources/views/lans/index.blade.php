@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">LANS</h3>
            @foreach ($lans as $lan)
            <card title="{!! $lan->title !!}" date="{!! $lan->human_date !!}">
            	
                <div slot="content">
                	<div class="col-md-8">
                		
                	</div>
                	<div class="col-md-4">
                		
                	</div>
                </div>
            </card>
            @endforeach
        </div>
    </div>
@endsection
