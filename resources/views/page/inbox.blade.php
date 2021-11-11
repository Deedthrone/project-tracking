@extends('layouts.inbox-slug')

@section('inbox')
<!-- ISI -->
<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

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
                        {{-- <form action="/inbox" method="get"> --}}
                        @foreach ($inboxs as $inbox)

                        @if ( $inbox->type_id == 1 )
                        
                        <tr>
                            <td>
                                <div class="chatbox">
                                    <a href="/inboxs/{{ $inbox->slug }}">
                                        {{-- INPUT --}}
                                        <button  type="submit" name="detailchat">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="specid" value="{{ $inbox->id }}">
                                            <input type="hidden" name="specname" value="{{ $inbox->name }}">
                                            <input type="hidden" name="specsubject" value="{{ $inbox->subject }}">
                                            <input type="hidden" name="specmessage" value="{{ $inbox->message }}">


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
                                        {{-- INPUT --}}
                                        <button type="submit" name="detailchat">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="specid" value="{{ $inbox->id }}">
                                            <input type="hidden" name="specname" value="{{ $inbox->name }}">
                                            <input type="hidden" name="specsubject" value="{{ $inbox->subject }}">
                                            <input type="hidden" name="specmessage" value="{{ $inbox->message }}">


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

                        @endif

                        @endforeach
                        {{-- </form> --}}
                    </table>

                <div class="chatdetail">
                    {{-- <div class="navchat">
                        <p>Test => {{ $inbox->name }}</p>    
                    </div> --}}
                    <h1>{{ $test->subject }}</h1>
                    <div class="chatbody">
                        <div class="profile">
                            <p>P</p>
                            
                        </div>
                        <h1>{{ $test->name }}</h1>
                    </div>
    
                    <div class="chatbody">
                        {{ $test->message }}
                    </div>
                </div>
        </div>
</div>

@endsection
