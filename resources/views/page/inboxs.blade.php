@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->

<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

<div class="boxchat">
    <div class="boxchat">
        <div class="headbox">
            <div class="chatfeature">
            </div>
            <div class="chatfeature">
                <a href="">
                    <i class='bx bxs-inbox bx-md'></i>
                </a>
            </div>
            <div class="chatfeature">
                <a href="">
                    <i class='bx bx-mail-send bx-md'></i>
                </a>
            </div>
            <div class="chatfeature">
                
            </div>
            <div class="chatfeature">
                
            </div>
    
    
        </div>
            <div class="chatlist">
                    <table>
                        @foreach ($inboxs as $inbox)
                        <tr>
                            <td>
                                <div class="chatbox">
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        <div class="profile">
                                            <p>P</p>
                                        </div>

                                        <div class="biodata">
                                            <ul>
                                                <li>{{ $inbox->name }}</li>
                                                <li><p>{{ $inbox->excerpt }}</p></li>
                                            </ul>
                                            <h1>{{ date("M d, Y"); }}</h1>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <div class="chatdetail">
                            <div class="navchat">
                                <p>You can start chat here</p>    
                            </div>
                        </div>
                </table>
        </div>
</div>


@endsection
