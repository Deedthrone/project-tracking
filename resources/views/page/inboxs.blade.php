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

                        @if ( $inbox->type == 1 )

                        <tr>
                            <td>
                                <div class="chatbox">
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        <div class="profile">
                                            <p>P</p>
                                        </div>

                                        <div class="biodata">
                                            <div class="biocontain">
                                                <ul>
                                                    <li>{{ $inbox->name }}</li>
                                                    <li><p>{{ $inbox->excerpt }}</p></li>
                                                </ul>
                                            </div>
                                            <h1>{{ date("M d, Y"); }}</h1>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @else

                        <tr>
                            <td>
                                <div class="chatbox2">
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        <div class="profile2">
                                            <p>P</p>
                                        </div>

                                        <div class="biodata2">
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

                        @endif

                        @endforeach
                        <div class="chatdetail">
                            <div class="navchat">
                                <p>You can start chat here feel free to chat anything</p>    
                            </div>
                        </div>
                </table>
        </div>
</div>

@endsection
