<!-- Variable -->

@php

    $taskfield = 4;
    $partask = 2;
    $subtask = 2;

@endphp


<!-- LOOPING SOURCETASK -->
@foreach ($tasks as $task)

            <!-- SOURCE TASK -->         
                <div class="taskfield">
                    <ul>
                        <!-- HEADER -->
                        <li>
                            {{ $task->category }}
                        </li>
    
                        <!-- + and ... -->
                            <li>
                                <a href="">
                                    <i class='bx bx-plus bx-md bx-tada'></i>
                                </a>
                            </li>
    
                                <li>
                                    <a href="">
                                        <i class='bx bx-dots-horizontal-rounded bx-tada'></i>
                                    </a>
                                </li>      
                    </ul>
    
                    <div class="alltask">
    
                        <?php for($pt = 0 ; $pt < $partask ; $pt++) : ?>
                            <div class="partask">
                                <form action="" method="post">
                                    <!-- button -->
                                    <div class="priority"></div>                               

                                    <input type="checkbox"> <label for="">{{ $task->titletask }}</label>
                                    <span class="checkmark"></span>
                                    <div class="clear"></div>
                                    <!-- CONTENT BAR -->
                                    <p>
                                        {{ $task->body }}
                                    </p>
                                    
                                    <!-- SUBTASK -->
        
                                    <!-- LOOPING SUBTASK -->
                                    <?php for ($sb = 0 ; $sb < $subtask ; $sb++) : ?>
                                    <div class="subtask">
                                        <input type="checkbox"> <label for="">{{ $task->subtask }}</label>
                                    </div>
                                    
                                    <?php endfor;?>
        
                                    <br>
                                    
                                    <!-- UPLOAD -->
                                    <div class="upload">
                                        <input type="file">
                                    </div>
        
                                    <!-- CLEAR -->
                                    <div class="clear"></div>
                                    
                                    <div class="date">
                                        <label for=""><?php echo date("l, d-M-Y"); ?></label>
                                    </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div> 
@endforeach