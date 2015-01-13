<html>
    <head>
        <title>Laduni</title>
        <meta name="description" content="Official Website dari yayasan nurRachman nurRachim (Rahman-Rahim)"/>
        <meta name="keywords" content="illa,illarahmatan,lilalamin,payung agung,illa rahmatan lil alamin, agung, rahman, rahim, rahmanrahim, nurRahman, nurRahim"/>
        <meta name="author" content="Payung Agung"/>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/payungagung.png"/>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/styledetail.css" type="text/css" media="screen"/>
        <!-- wysihtml5 parser rules -->
        <script src="<?php echo base_url(); ?>js/advanced.js"></script>
        <!-- Library -->
        <script src="<?php echo base_url(); ?>js/wysihtml5-0.3.0.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/artikel/stylesheet.css" media="screen"  />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleadministrator.css" />
    </head>
    <body>

        <div id="boxdetail">
            
            <center><h1><?php echo $tugas->judul; ?></h1></center>
            <br/>            
            <div style="float:right;"><?php echo $tugas->datecreate; ?></div>
            <br/>
            <?php echo $tugas->artikel; ?>           
            <hr/>

            <form action="<?= base_url(); ?>sekolah/createjawaban" method="post"  name="createjawaban">
                <div style="margin-top:50px;">
                    <center>
                        <h2>Jawaban Tugas Anda</h2>
                        <br/>
                        <input type="hidden" name="tugas_id" value="<?php echo $tugas->id_tugas; ?>"> 
                        <div id="wysihtml5-editor-toolbar">
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
                                    <input data-wysihtml5-dialog-field="src" value="http://"/>
                                </label>
                                <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
                            </div>
                            <section class="sectionstyle">
                                <textarea class="textareastyle" id="wysihtml5-editor"  name="jawaban" spellcheck="false" wrap="off" autofocus placeholder="Ketik Jawaban Anda Disini...."><?php if ($jawaban != null)
                echo $jawaban->jawaban; ?></textarea>
                            </section>
                    </center>
                </div>
                <div style="margin-top:5px; margin-left:47px;">
                    <?php if ($jawaban != null) { ?>
                        <input type="submit"  name="update"  class="button-a blue" value="UPDATE"/>
                    <?php } else { ?>
                        <input type="submit"  name="save"   class="button-a blue" value="SAVE"/>
                    <?php } ?>

                </div>
            </form>

        </div>
    </div>
</div>
</body>
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
</html>

