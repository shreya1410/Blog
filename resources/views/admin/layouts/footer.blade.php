<footer class="main-footer">
    <strong>Copyright &copy; 2018- {{ Carbon\carbon::now()->year}} <a href="https://adminlte.io">SHREYA RAVAL</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
    </div>
</footer>

<!-- </footer> -->
<script src='{{asset("plugins/jquery/jquery.min.js")}}'></script>
<script src='{{asset("js/app.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("dist/js/adminlte.min.js")}}'></script>
<!-- Summernote -->
<script src='{{asset("plugins/summernote/summernote-bs4.min.js")}}'></script>
<!-- CodeMirror -->
<script src='{{asset("plugins/codemirror/codemirror.js")}}'></script>
<script src='{{asset("plugins/codemirror/mode/css/css.js")}}'></script>
<script src='{{asset("plugins/codemirror/mode/xml/xml.js")}}'></script>
<script src='{{asset("plugins/codemirror/mode/htmlmixed/htmlmixed.js")}}'></script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        //     mode: "htmlmixed",
        //     theme: "monokai"
        // });
    })
</script>

@section('footerSection')
@show
