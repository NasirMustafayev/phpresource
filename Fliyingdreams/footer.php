    <!-- Footer
    	================================================= -->
    	<footer id="footer">
    		<div class="container">
    			<div class="row">
    				<div class="footer-wrapper">
    					<div class="col-md-3 col-sm-3">
    						<font size="6" color="black">Fl<font color="red">i</font>yingDreams</font>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="copyright">
    			<p><?php echo $show['parametr_author']; ?><br>
                Website administration is not responsible for the content posted on the site.</p>
            </div>
        </footer>
        
        <!--preloader-->
        <div id="spinner-wrapper">
          <div class="spinner"></div>
      </div>
      
    <!-- Scripts
    	================================================= -->
    	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    	<script src="js/jquery-3.1.1.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.sticky-kit.min.js"></script>
        <script src="js/jquery.scrollbar.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            $("#btn2").click(function(){

                $("#ytab").toggle(500)

            });
        </script>
        <script>
            $("#btn3").click(function(){

                $("#linktab").toggle(500)

            });
        </script>

        <!-- MODAL-->

        <script type="text/javascript">
            $(document).ready(function(){

                $('.view').click(function(){

                    var post_id = $(this).attr("id");

                    $( '#post-detail' ).empty();

                    $.ajax({
                        url : "process/select.php",
                        method: "post",
                        data: {post_id:post_id},
                        success:function(data){
                            $('#post-detail').append(data);

                        }

                    });

                });
                //Search function
                load_data();
                function load_data(query)
                {
                    $.ajax({
                        url:"process/search.php",
                        method:"post",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });
                }

                $('#searchtext').keyup(function(){
                    var search = $(this).val();
                    if(search != '')
                    {
                        load_data(search);
                    }
                    else
                    {
                        load_data();            
                    }
                });

            });

        </script>

        <script type="text/javascript">

            $(document).ready(function(){

                var cnt = 2;
                $("#addlink").click(function(){
                    $(".linktabadd").append('<div class="col-md-4">Link title<input type="text" placeholder="Type a title" comment="linktitle'+cnt+'" style="font-size: 15px" class="form-control"></div><div class="col-md-8">Link url<input type="text" comment="linkurl'+cnt+'" placeholder="ex:http://fliyingdreams.us" class="form-control"></div>');
                    cnt++;

                });


                $(".linktabadd").on('click','.remlink',function(){

                    {
                        $(this).parent().parent().remove();
                    }
                }); 



                //Like function
                $("body").on("click",".likebtn", function() {
                   var pid = $(this).attr("pid");
                   var pai = $(this).attr("pai");
                   var k = $(this).attr("id");
                   $.ajax({
                    url: 'process/like.php',
                    type: 'POST',
                    data: {'pai':pai,'pid':pid},
                    success: function(blike) {
                        if (blike==1) {
                            k++;
                            $(".likebtn"+pid).empty().html("<i class='ion-star mr-2' style='font-size: 15px;color:#39b54a'>  "+k+"</i>");
                            $(".likebtn"+pid).attr("id", k);
                        } else if(blike==2) {
                            k--; 
                            $(".likebtn"+pid).empty().html("<i class='ion-star mr-2' style='font-size: 15px;color: gray'> "+k+"</i>");
                            $(".likebtn"+pid).attr("id", k);
                        }else{
                            blike.preventDefault();
                        }
                    }
                });
               });

            });
        </script>

        <!--Comment-->

        <script>
            $(document).ready(function(){
                $(document).on('click','#addcomment',function(){
                    var post_id=$(this).attr("post_id");
                    var comment=$('#comment'+post_id).val();
                    $.ajax({
                        url:'process/comment.php',
                        type:'POST',
                        data:{'comment':comment,'post_id':post_id},
                        success:function(response){
                            $('#comment').val('');
                            $('#post_id').val('');
                            alert('Your comment successfully shared');
                        }
                    });

                });

            });


//Upload profile background
$("#bgpicture").change(function() {
    var form_data = new FormData($("#mybg")[0]);
    $.ajax({
        url: "process/bgupload-process.php",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(bgpic) {
            alert('OK');
        }
    });
});
//Upload profile picture
$("#ppicture").change(function() {
    var form_data = new FormData($("#mypp")[0]);
    $.ajax({
        url: "process/ppupload-process.php",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(ppic) {
            alert('OK');
        }
    });
});
</script>
</body>
</html>
