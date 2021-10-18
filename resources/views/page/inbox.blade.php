@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->

<div class="boxinbox">
    <form action="" method="post">
        <i class='bx bx-search-alt-2 bx-sm  ' ></i>
        <input type="pencarian" name="" id="">
    </form>
</div>
<div class="allbox">
    <?php for ($i = 1 ; $i < 3 ; $i++ ) : ?>
        <div class="submsg">
            <button>
                <i class='bx bxs-user-circle bx-md' ></i>
                <h9><?= "nama"?></h9>
<p><?= "libur tela tiba libur telah tiba hore hore" ?> </p>                
                <label for=""><?= $today = date("H:i"); ?></label>
            </button>
        </div>
    <?php endfor; ?>
</div>

@endsection
