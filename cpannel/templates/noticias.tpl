{include file='menu.tpl'}
<main>
    <div id="options">
        
 <!--  
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  <textarea>Easy (and free!) You should check out our premium features.</textarea>
-->
 <script src="js/CKEditor/ckeditor.js"></script>
    
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
 
    </div>
</main>