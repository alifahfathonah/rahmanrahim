<section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
         
           <div class="search">
             
           </div>
        </div>
    <div class="grid-1">
            <form action="<?=base_url();?>administratorPA/docreatetugas" method="post"  name="docreatetugas">
           <div class="title-grid"><input style="color: black; height: 20px; font-family: verdana; " type="text" name="judul" id="judul"  value="Judul" size="21" /></div>
           <div class="content-gird" style="height: 600px;"> 
    <div id="wysihtml5-editor-toolbar">
        <div class="floatdropdownartikel" style="margin-right:0px;">
            <select name="kategori" class="dropdownartikel" >
                            <option value="Tugas Jumat">Tugas Jumat</option>
                            <option value="Tugas Mingguan">Tugas Mingguan</option>                           
                            </select>   
          <select name="subkategori" class="dropdownartikel" style="margin-top:20px;">
                            <option value="Tauqid">Tauqid</option>
                            <option value="Aqidah">Aqidah</option>
                            <option value="Kesangyangan">Kesangyangan</option>
                            <option value="Laduni">Laduni</option>
                            <option value="Umum">Umum</option>
                            </select>     
            <select name="status" class="dropdownartikel" style="margin-top:20px;">
                            <option value="Published">Published</option>
                            <option value="Not Published">Not Published</option>
                           
                            </select> 
            <select name="news" class="dropdownartikel" style="margin-top:20px;">
                            <option value="1">News</option>
                            <option value="0">Not News</option>
                           
                            </select>   
          </div>
        
        
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
           

      </textarea>
    </section>
               <div style="margin-top:10px;">
                   <input type="submit"  name="create"  class="button-a blue" value="SAVE"/>
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