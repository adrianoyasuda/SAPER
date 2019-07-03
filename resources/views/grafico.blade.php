@extends('layouts.layout')



@section('content')

<div class="row" align="center">
    <div class="col-sm-12">
        <div id='lava_div'>
            <?php echo $lava->render($tipo, 'Dados', 'lava_div'); ?>
        </div>
    </div>
</div>

@stop



