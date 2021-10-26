@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->

<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

<div class="boxchat">
    <div class="headbox">

    </div>
    <div class="chatlist">
            <table>
                @foreach ($inboxs as $inbox)
                   <tr>
                        <td>
                            <div class="chatbox">
                                <a href="">
                                    <div class="profile">
                                        <p>P</p>
                                    </div>

                                    <div class="biodata">
                                        <ul>
                                            <li>{{ $inbox->name }}</li>
                                            <li><p>{{ $inbox->message }}</p></li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </td>
                   </tr>
                @endforeach
                <div class="chatdetail">
                </div>
            </table>
    </div>
</div>


@endsection
