<section id="middle">
    <div id="container-main">
        <div id="container">
            <div id="content">

                <form action="<?= base_url(); ?>administratorPA/member" method="get"  name="doFilter">
                    <div class="speedbar">

                        <select name="status" id="statusdropdown" onchange="submit()">
                            <option value="semua" <?php if (@$status == 'semua')
    echo "selected"; ?> >Semua</option>
                            <option value="guest" <?php if (@$status == 'guest')
    echo "selected"; ?> >Guest</option>
                            <option value="member" <?php if (@$status == 'member')
    echo "selected"; ?> >Member</option>
                            <option value="admin" <?php if (@$status == 'admin')
    echo "selected"; ?> >Admin</option>
                        </select>
                        <div class="search">
                            <input type="text" name="search" id="search" value="<?php echo $search; ?>" />

                        </div>
                    </div>
                </form> 
                <!--Users-->




                <div class="grid-2">
                    <div class="title-grid">Users</div>

                    <div class="content-gird">                        
                        <div class="users-list">

                            <?php
                            if (isset($rows)):
                                $i = 0;
                                foreach ($rows as $baris) :
                                    $i++;
                                    if ($i % 2 == 0)
                                        continue;
                                    ?>

                                    <div class="user">
                                        <div class="user-avatar"><img src="<?php echo base_url() . 'uploads/' . $baris->foto; ?>" alt=""></div>
                                        <div class="user-status"><span id="<?php
                                    if ($baris->status == 'admin')
                                        echo "statusmemberred";
                                    else if ($baris->status == 'member')
                                        echo "statusmemberblue";
                                    else
                                        echo 'statusmembergreen';
                                    ?>"><?php echo $baris->status; ?></span>
                                        </div>
                                        <div class="user-info">
                                            <div class="user-name"><?php echo $baris->username; ?></div>
                                            <div class="user-email"><?php echo $baris->email; ?></div>
                                            <div class="user-link">
                                                <ul class="button-list-2">
                                                    <li>
                                                        <a class="button-a blue" href="<?php echo base_url() . "administratorPA/detailmember/" . $baris->username; ?>"><span class="edits icon-white"></span></a>
                                                    </li>
                                                    <li>
                                                        <a class="button-a blue" href="<?php echo base_url() . "administratorPA/deletemember/" . $baris->id_member; ?>"><span class="dell icon-white"></span></a>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
    <?php endforeach; ?>       
<?php endif; ?>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>

                <div class="grid-2 last">
                    <div class="title-grid">Users</div>
                    <div class="content-gird">
                        <div class="users-list">

                            <?php
                            if (isset($rows)):
                            $i = 0;
                            foreach ($rows as $baris) :
                                $i++;
                                if ($i % 2 == 1)
                                    continue;
                                ?>

                                <div class="user">
                                    <div class="user-avatar"><img src="<?php echo base_url() . 'uploads/' . $baris->foto; ?>" alt=""></div>
                                    <div class="user-status"><span id="<?php
                                    if ($baris->status == 'admin')
                                        echo "statusmemberred";
                                    else if ($baris->status == 'member')
                                        echo "statusmemberblue";
                                    else
                                        echo 'statusmembergreen';
                                    ?>"><?php echo $baris->status; ?></span>
                                    </div>
                                    <div class="user-info">
                                        <div class="user-name"><?php echo $baris->username; ?></div>
                                        <div class="user-email"><?php echo $baris->email; ?> </div>
                                        <div class="user-link">
                                            <ul class="button-list-2">
                                                <li>
                                                    <a class="button-a blue" href="<?php echo base_url() . "administratorPA/detailmember/" . $baris->username; ?>"><span class="edits icon-white"></span></a>
                                                </li>
                                                <li>
                                                    <a class="button-a blue" href="<?php echo base_url() . "administratorPA/deletemember/" . $baris->id_member; ?>"><span class="dell icon-white"></span></a>
                                                </li>
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
<?php endforeach; ?>  
                            <?php endif; ?>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>

                <!--Users end-->


