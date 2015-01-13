<section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
         
           <div class="search">
             
           </div>
        </div>
    <div class="grid-1">
        <form action="<?=base_url();?>administratorPA/updatetugas" method="post"  name="updatedetailtugas">
           <div class="title-grid"><input style="color: black; height: 20px; font-family: verdana; " type="text" name="judul" id="judul"  value="<?php echo $judul ?>" size="21" /></div>
           <div class="content-gird" style="height: 600px;"> 
               
    <div id="wysihtml5-editor-toolbar">
        <div class="floatdropdownartikel" style="margin-right:0px;">
             <select name="kategori" class="dropdownartikel" >
                            <option value="Tugas Jumat" <?php if($kategori=='Tugas Jumat')echo" selected";?> >Tugas Jumat</option>
                            <option value="Tugas Mingguan" <?php if($kategori=='Tugas Mingguan')echo" selected";?> >Tugas Mingguan</option>                           
                            </select>
          <select name="subkategori" class="dropdownartikel" style="margin-top:20px;"> 
                            <option value="Tauqid"  <?php if($subkategori=='Tauqid')echo" selected"; ?> >Tauqid</option>
                            <option value="Aqidah" <?php if($subkategori=='Aqidah')echo" selected"; ?> >Aqidah</option>
                            <option value="Kesangyangan" <?php if($subkategori=='Kesangyangan')echo" selected"; ?> >Kesangyangan</option>
                            <option value="Laduni" <?php if($subkategori=='Laduni')echo" selected"; ?> >Laduni</option>
                            <option value="Umum" <?php if($subkategori=='Umum')echo" selected"; ?> >Umum</option>
                            </select>    
            <select name="status" class="dropdownartikel" style="margin-top:20px;">
                            <option value="Published"  <?php if($status=='Published')echo" selected"; ?> >Published</option>
                            <option value="Not Published" <?php if($status=='Not Published')echo" selected"; ?> >Not Published</option>
                           
            </select>                  
            <select name="news" class="dropdownartikel" style="margin-top:20px;">
                            <option value="0"  <?php if($news==0)echo" selected"; ?> >Not News</option>
                            <option value="1" <?php if($news==1)echo" selected"; ?> >News</option>
                           
            </select>
          </div>
        <input style="color: black; " type="text" name="id_tugas" id="id_tugas" hidden value="<?php echo $id_tugas ?>" size="30" />
      <header class="headerstyle">
        <ul class="commandstyle">
          <li data-wysihtml5-command="bold" title="Make text bold (CTRL + B)" class="command"></li>
          <li data-wysihtml5-command="italic" title="Make text italic (CTRL + I)" class="command"></li>
          <li data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list" class="command"></li>
          <li data-wysihtml5-command="insertOrderedList" title="Insert an ordered list" class="command"></li>
          <li data-wysihtml5-command="createLink" title="Insert a link" class="command"></li>
          <li data-wysihtml5-command="insertImage" title="Insert an image" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" title="Insert headline 1" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Insert headline 2" class="command"></li>
          <li data-wysihtml5-command-group="foreColor" class="fore-color" title="Color the selected text" class="command">
            <ul>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
            </ul>
          </li>
          <li data-wysihtml5-command="insertSpeech" title="Insert speech" class="command"></li>
          <li data-wysihtml5-action="change_view" title="Show HTML" class="action"></li>
        </ul>
      </header>
      <div data-wysihtml5-dialog="createLink" style="display: none;">
        <label>
          Link:
          <input data-wysihtml5-dialog-field="href" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
      </div>

      <div data-wysihtml5-dialog="insertImage" style="display: none;">
        <label>
          Image:
          <input data-wysihtml5-dialog-field="src" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
      </div>
    </div>
               
    <section class="sectionstyle">
      <textarea class="textareastyle" id="wysihtml5-editor"  name="artikel" spellcheck="false" wrap="off" autofocus placeholder="Enter something ...">
            <?php echo $artikel; ?></textarea>
    </section>
               <div style="margin-top:10px;">
                   <input type="submit"  name="update"  class="button-a blue" value="UPDATE"/>
                   <input type="submit"  name="back"  class="button-a gray" value="BACK"/>
                   
               </div>
     
           </div>
           </form>
        <script>
      var editor = new wysihtml5.Editor("wysihtml5-editor", {
        toolbar:     "wysihtml5-editor-toolbar",
        stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "<?php echo base_url(); ?>css/artikel/editor.css"],
        parserRules: wysihtml5ParserRules
      });
      
      editor.on("load", function() {
        var composer = editor.composer;
        composer.selection.selectNode(editor.composer.element.querySelector("h1"));
      });
    </script>
    </div>