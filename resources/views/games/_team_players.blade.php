<table class="table">
    <tr>
        <th>Gamer</th>
        <th>Hero</th>
        <th>Kills</th>
        <th>Deaths</th>
        <th>Assists</th>
    </tr>
    @foreach($players as $key => $player)
        <tr>
            <td style="vertical-align: middle;">
                {!! $player->gamer->name !!}
                {!! Form::hidden('player_id[]', $player->id) !!}
            </td>
            <td class="col-xs-2 p-2">
                {!! 
                    Form::select('hero_id[]', $heros, null, [
                        'placeholder' => 'Select hero', 
                        'class' => 'form-control selectpicker',
                        'data-live-search' => 'true',
                    ]) 
                !!}
            </td>
            <td class="col-xs-2 p-2">
                {!! Form::number('kills[]', null, ['class' => 'form-control']) !!}
            </td>
            <td class="col-xs-2 p-2">
                {!! Form::number('deaths[]', null, ['class' => 'form-control']) !!}
            </td>
            <td class="col-xs-2 p-2">
                {!! Form::number('assists[]', null, ['class' => 'form-control']) !!}
            </td>
        </tr>
    @endforeach
</table>