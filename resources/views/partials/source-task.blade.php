<!-- Variable -->

<?php

$taskfield = 4;
$partask = 2;
$subtask = 2;

?>

<!-- LOOPING SOURCETASK -->
<?php for($i = 0 ; $i < $taskfield ; $i++) : ?>
            
            <!-- SOURCE TASK -->         
                <div class="taskfield">
                    <ul>
                        <!-- HEADER -->
                        <li>
                            <?php echo "[Judul Task]"; ?>
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

                                <input type="checkbox"> <label for=""><?php echo"[Ini adalah judul tugas]"; ?></label>
                                <span class="checkmark"></span>
                                <div class="clear"></div>
                                <!-- CONTENT BAR -->
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ducimus ipsam consequatur natus saepe delectus consequuntur commodi id libero hic repudiandae adipisci voluptatum doloribus, earum ab odit nesciunt labore modi?
                                </p>
                                
                                <!-- SUBTASK -->
    
                                <!-- LOOPING SUBTASK -->
                                <?php for ($sb = 0 ; $sb < $subtask ; $sb++) : ?>
                                <div class="subtask">
                                    <input type="checkbox"> <label for=""><?php echo "[Ini subtask]"; ?></label>
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
    
            <?php endfor; ?>