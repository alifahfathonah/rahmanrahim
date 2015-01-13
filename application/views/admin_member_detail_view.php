<section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
         
           <div class="search">
             
           </div>
        </div>
<div class="grid-1">
           <div class="title-grid">Detail Member</div>
           <div class="content-gird">  
               <div style="position:relative; float:right;">
                    <?php if($foto==NULL || $foto=='') { ?>
                             <img src="<?php echo base_url(); ?>images/box.png" alt="bite" width="120" height="120"/>
                             <?php }  else {
                                 ?>
               <a href="<?php echo base_url().'uploads/'.$foto; ?>"> <img src="<?php echo base_url().'uploads/'.$foto; ?>" alt="Unggah Data Diri Kembali" width="190" height="120"/></a>
                            <?php } ?>

               </div>
               <form action="<?=base_url();?>administratorPA/updatedetailmember" method="post"  name="updatedetailmember">     
                    <table style="color: black; font-family: verdana;">
                        <tr>
                                <td><strong>ID Member</strong></td>
                                <td>&nbsp;</td>
                        <td ><input style="color: black; " type="text" name="id_member" id="id_member" readonly value="<?php echo $id_member ?>" size="30" /></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                                <td><strong>Username</strong></td>
                                <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="username" id="username" value="<?php echo $username ?>" size="30"/></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td><strong>Nama Lengkap</strong></td>
                                <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="nama" id="nama"  value="<?php echo $nama ?>" size="30"/></td>

                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                                <td><strong>Jenis Kelamin</strong></td>
                                <td width="50px">&nbsp;</td>
                         <td><select name="jenis_kelamin" id="jenis_kelamin" style="width: 200px"/>
                    <option value="Pria" <?php if($jenis_kelamin=='Pria') echo 'selected'; ?> >Pria</option>
                    <option value="Wanita" <?php if($jenis_kelamin=='Wanita') echo 'selected'; ?> >Wanita</option>

                        </tr>
                        <tr><td>&nbsp;</td></tr>

                        <tr>
                        <td><strong>Alamat</strong></td>
                        <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="alamat" id="alamat"  value="<?php echo $alamat ?>" size="30"/></td>

                        </tr>
                        <?php
                            $tgl = $tgllahir[8] . $tgllahir[9];
                            $bln = $tgllahir[5] . $tgllahir[6];
                            $thn = $tgllahir[0] . $tgllahir[1] . $tgllahir[2] . $tgllahir[3];
                         ?>
                        <tr><td>&nbsp;</td></tr>
                         <tr>
                        <td><strong>E-mail</strong></td>
                        <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="email" id="email"  value="<?php echo $email ?>"  size="30"/></td>

                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                        <td><strong>Tempat Lahir</strong></td>
                        <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="tempat" id="tempat"   value="<?php echo $tmptlahir?>" size="30"/></td>

                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                        <td><strong>Tanggal Lahir</strong></td>
                        <td>&nbsp;</td>

                        <td><select name="tanggal" id="tanggal"  >
                                <?php $i = 31;
                                  $j = 1;
                                  while($i)
                                  {
                                      echo "<option value=$j"; if($j==$tgl)echo" selected"; echo">$j</option>";
                                      $i--;
                                      $j++;
                                  }
                                  ?>          
                        </select> 
                        <select name="bulan" id="bulan" >
                                  <option value="1" <?php if($bln==1)echo" selected"; ?>  >Januari</option>
                                  <option value="2" <?php if($bln==2)echo" selected"; ?>>Februari</option>
                                  <option value="3" <?php if($bln==3)echo" selected"; ?>>Maret</option>
                                  <option value="4" <?php if($bln==4)echo" selected"; ?>>April</option>
                                  <option value="5" <?php if($bln==5)echo" selected"; ?>>Mei</option>
                                  <option value="6" <?php if($bln==6)echo" selected"; ?>>Juni</option>
                                  <option value="7" <?php if($bln==7)echo" selected"; ?>>Juli</option>
                                  <option value="8" <?php if($bln==8)echo" selected"; ?>>Agustus</option>
                                  <option value="9" <?php if($bln==9)echo" selected"; ?>>September</option>
                                  <option value="10" <?php if($bln==10)echo" selected"; ?>>Oktober</option>
                                  <option value="11" <?php if($bln==11)echo" selected"; ?>>November</option>
                                  <option value="12" <?php if($bln==12)echo" selected"; ?>>Desember</option>	  				  
                        </select> 
                        <select name="tahun" id="tahun">
                                  <?php $i = 50;
                                  $j = 1950;
                                  while($i)
                                  {
                                      echo "<option value=$j"; if($j==$thn)echo" selected"; echo">$j</option>";
                                      $i--;
                                      $j++;
                                  }
                                  ?>
                        </select>

                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                        <td><strong>Nomor HP</strong></td>
                        <td>&nbsp;</td>
                        <td><input style="color: black" type="text" name="nomorhp" id="nomorhp"  value="<?php echo $hp ?>" size="30"/></td>


                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                        <td><strong>Negara</strong></td>
                        <td>&nbsp;</td>
                        <td>
                            <select name="negara" id="negara" style="width: 200px">
                            <option value="Indonesia" <?php if($status=='Indonesia')echo" selected"; ?> >Indonesia</option>
                            <option value="Amerika <?php if($status=='Amerika')echo" selected"; ?>">Amerika</option>
                            <option value="Arab Saudi <?php if($status=='Arab Saudi')echo" selected"; ?>">Arab Saudi</option>
                            <option value="China <?php if($status=='China')echo" selected"; ?>">China</option>
                            <option value="Inggris <?php if($status=='Inggris')echo" selected"; ?>">Inggris</option>
                            </select>
                        </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                         <tr>
                        <td><strong>Status</strong></td>
                        <td>&nbsp;</td>
                        <td>
                            <select name="status" id="status" style="width: 200px">
                            <option value="admin"  <?php if($status=='admin')echo" selected"; ?> >Admin</option>
                            <option value="member" <?php if($status=='member')echo" selected"; ?> >Member</option>
                            <option value="guest" <?php if($status=='guest')echo" selected"; ?> >Guest</option>
                            </select>
                        </td>                                                                
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                </table>
              
                        <input type="submit"  name="update"  class="button-a blue" value="UPDATE"/>
                        <input type="submit"  name="back"  class="button-a gray" value="BACK"/>
               </form>
           </div>
        </div>  