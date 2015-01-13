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
                        <th class="th_title">Judul Tugas</th>  
                        <th class="th_date">Date created</th>
                        <th class="th_date">Last edited</th>
                        <th class="th_author">Author</th>
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($rows)):?>
                    <?php foreach(@$rows as $row) : ?>
                    <tr class="item">
                        <!--<td><input type="checkbox" name="id[]" value="1" /></td>-->
                        <td class="subject"><a href="<?php echo base_url()."administratorPA/detailjawaban/".$row->id_jawaban; ?>"><?php $tugas = $this->tugas_model->select_one_tugas($row->tugas_id); echo @$tugas->judul; ?></a></td>                        
                        <td><?php echo $row->datecreate; ?></td>
                        <td><?php echo $row->lastedit; ?></td>
                        <td class="name"><?php echo $row->username; ?></td> 
                        <td class="action"><a href="<?php echo base_url()."administratorPA/deletejawaban/".$row->id_jawaban; ?>"><img src="<?php echo base_url()?>images/del.png" alt="delete"/></a></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
               <div style="margin-top: 50px;">
               <!--<a href="<?php echo base_url()?>administratorPA/createjawab"an><input type="submit"  name="create"  class="button-a blue" value="Buat Jawaban "/></a>-->
               </div>
    		<div class="clear"> </div>
           </div>
           </div>
    
