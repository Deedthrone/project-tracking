<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

<div class="boxchat">
    <div class="headbox">



    </div>
            <div class="chatlist">

                <div class="chatdetail2">
                    <div class="navchat2">
                            <h2>{{ $inbox->subject }}</h2>    
                    </div>
                        <div class="chat2">          
                            <div class="profilechat2">
                            <p>P</p>
                            </div>
                                <label for="">{{ 'user@gmail.com' }}</label>
                                <h2>{{ date("M d, Y"); }}</h2>
                                <h4>To : {{ $inbox->name }} </h4>
                        </div>
                        <div class="chatbody">
                            <h6>Hey {{ $inbox->name }}</h6>
                            <p>{{ $inbox->message }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>