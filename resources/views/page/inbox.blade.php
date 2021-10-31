@extends('layouts.inbox-slug')

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
                        @foreach ($subinboxs as $subinbox)

                        @if ( $subinbox->type == 1 )

                        <tr>
                            <td>
                                <div class="chatbox">
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        <button>
                                            <div class="profile">
                                                <p>P</p>
                                            </div>

                                            <div class="biodata">
                                                <div class="biocontain">
                                                    <ul>
                                                        <li>{{ $subinbox->name }}</li>
                                                        <li><p>{{ $subinbox->message }}</p></li>
                                                    </ul>
                                                </div>
                                                <h1>{{ date("M d, Y"); }}</h1>
                                            </div>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @else

                        <tr>
                            <td>
                                <div class="chatbox2">
                                    <a href="/inboxs/{{ $subinbox->slug }}">
                                        <button>
                                            <div class="profile2">
                                                <p>P</p>
                                            </div>

                                            <div class="biodata2">
                                                <div class="biocontain2">
                                                    <ul>
                                                        <li>{{ $subinbox->name }}</li>
                                                        <li><p>{{ $subinbox->message }}</p></li>
                                                    </ul>
                                                </div>
                                                <h1>{{ date("M d, Y"); }}</h1>
                                            </div>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @endif

                        @endforeach
                        <div class="chatdetail">
                            <div class="navchat">
                                <p>Test => {{ $inbox->name }}</p>    
                            </div>
                        </div>
                </table>
        </div>
</div>

@endsection
