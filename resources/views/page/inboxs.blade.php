@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->
<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>
@foreach ($inboxs as $inbox)
    <input type="hidden" value="{{ $inbox->id }}">
@endforeach
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
                <a href="/outboxs/{{ $inbox->slug }}">
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
                                        <button>
                                            <div class="profile">
                                                <p>P</p>
                                            </div>

                                            <div class="biodata">
                                                <div class="biocontain">
                                                    <ul>
                                                        <li>{{ $inbox->name }}</li>
                                                        <li><p>{{ $inbox->message }}</p></li>
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
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        <button>
                                            <div class="profile2">
                                                <p>P</p>
                                            </div>

                                            <div class="biodata2">
                                                <div class="biocontain2">
                                                    <ul>
                                                        <li>{{ $inbox->name }}</li>
                                                        <li><p>{{ $inbox->message }}</p></li>
                                                    </ul>
                                                </div>
                                                <h1>{{ date("M d, Y"); }}</h1>
                                            </div>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>

                    @endif

                    @endforeach
                </form>
                <div class="chatdetail">
                    <div class="navchat">
                        <p>Test => {{ $inbox->name }}</p>    
                    </div>
                    <div class="chatbody">
                       
                    </div>
                </div>
        </div>
</div>

@endsection
