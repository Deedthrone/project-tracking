@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<?php
    $chat = 6;
?>
<!-- ISI -->

<div class="chatfield">
    <input type="text" placeholder="Search..">
    
    <?php for ($c = 0 ; $c < $chat ; $c++) : ?>
    <div class="pagechat">
        <img src="/image/user/ex.png" alt="">
        <ul>
            <li><b><?php echo "Rudi Tabuti"; ?></b></li>
            <li><?php echo "Gimana projectnya?"; ?></li>
        </ul>
    </div>
    <?php endfor;?>
</div>

@endsection
