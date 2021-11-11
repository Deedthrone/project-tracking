@extends('layouts.inbox-slug')

@section('inbox')
<!-- ISI -->
<!-- ISI -->
<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

{{-- DECLARATION --}}
@foreach ($inboxs as $inbox)
    <input type="hidden" value="{{ $inbox->id }}">
@endforeach


<div class="boxchat">
    <div class="boxchat">
        <div class="headbox">

            @foreach ($types as $type)
                
                @if ( $type->name === "inbox")
                <div class="chatfeature">
                    <a href="/outboxs/{{ $type->name }}">
                        <i class='bx bxs-inbox bx-md'></i>
                    </a>
                </div>

                @elseif ($type->name === "outbox")
                <div class="chatfeature">
                    <a href="/outboxs/{{ $type->name }}">
                        <i class='bx bx-mail-send bx-md'></i>
                    </a>
                </div>

                @elseif ($type->name === "favorit")
                <div class="chatfeature">
                    <a href="/outboxs/{{ $type->name }}">
                        <i class='bx bx-mail-send bx-md'></i>
                    </a>
                </div>
                @else

                @endif

            @endforeach
    
    

        </div>
            <div class="chatlist">
                    <table>
                        @foreach ($inboxs as $inbox)

                        @if ( $inbox->type_id == 1 )

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
