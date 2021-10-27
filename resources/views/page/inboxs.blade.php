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
                                <h2>{{ $inbox->subject }}</h2   >    
                            </div>

                            <div class="chat">
                                
                                <div class="profilechat">
                                    <p>P</p>
                                </div>
                                <label for="">{{ $inbox->name }}</label>
                                <h2>{{ date("M d, Y"); }}</h2>
                                <h4>To : </h4>


                            </div>
                        </div>
                    </table>
            </div>
</div>


@endsection
