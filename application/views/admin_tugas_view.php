<section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
         
           <div class="search">
             
           </div>
        </div>
        
     	<!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">Data Tugas</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                        <!--<th class="th_chexbox"><input type="checkbox" name="set" onclick="setChecked(this)" /></th>-->
                        <th class="th_title">Title</th>  
                        <th class="th_status">Jenis</th>
                        <th>Kategori</th>
                        <th >Status</th>
                        <th class="th_date">Date created</th>
                        <th class="th_author">Author</th>
                        <th>News</th>
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($rows)):?>
                    <?php foreach(@$rows as $row) : ?>
                    <tr class="item">
                        <!--<td><input type="checkbox" name="id[]" value="1" /></td>-->
                        <td class="subject"><a href="<?php echo base_url()."administratorPA/detailtugas/".$row->id_tugas; ?>"><?php echo $row->judul; ?></a></td>
                        <td class="published"><?php echo $row->kategori; ?></td>
                        <td class="published"><?php echo $row->subkategori; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->datecreate; ?></td>
                        <td class="name"><?php echo $row->username; ?></td> 
                        <td><?php if($row->news==0) echo "No"; else echo "Yes"; ?></td>
                        <td class="action"><a href="<?php echo base_url()."administratorPA/deletetugas/".$row->id_tugas; ?>"><img src="<?php echo base_url()?>images/del.png" alt="delete"/></a></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
               <div style="margin-top: 50px;">
               <a href="<?php echo base_url()?>administratorPA/createtugas"><input type="submit"  name="update"  class="button-a blue" value="Buat Tugas "/></a>
               </div>
    		<div class="clear"> </div>
           </div>
           </div>
    
