<div class="navinbox">
    <i class='bx bx-search-alt-2 bx-sm'></i><input type="text" placeholder="Search..">
</div>

<div class="boxchat">
    <div class="headbox">



    </div>
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
                                <h4>To : {{'user@gmail.com'}} </h4>
                            </div>
                        </div>
                    </table>
            </div>
</div>