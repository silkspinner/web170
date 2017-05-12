    
</div>  <!-- END wrapper -->
    
    <footer>
        <small>&copy; 2015 - 2016, Artemisia Devsign, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ 
        <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small>
    </footer>

    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    
    <!-- WordPress footer hook for scripts -->
    <?php wp_footer(); ?>
    
</body>
</html>