<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/18/2017
 * Time: 1:37 AM
 */
?>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
