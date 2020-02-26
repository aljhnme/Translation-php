<html>
<head>
	<style type="text/css">
		.c{
			background:#CCD1D1;
			margin: 0 auto;
			width: 800px;
		    height: 400px;
		    margin-top:50px;
           }
           .t{
           	width:400px;
           	height: 250px;
           }
           .t1{
           	width:396px;
           	height: 250px;
           }
	</style>
</head>
<body>
   <h1 style="text-align:center;">Enter only words that are not a sentence</h1>

   <div class="c">
       <textarea readonly class="t" id="text_tran">
       	
       </textarea>
       <textarea id="text_to_tran" class="t1">
       </textarea>
       <button  style="width:100px;height: 50px;margin-left:50%; margin-top: 44px;" class="tran">Translation</button>
        </div>
</body>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
     
      $(document).on('click','.tran',function(){
         
        var text_v =$("#text_to_tran").val(); 
          $.ajax({
               url:"text_tran.php",
               type:"post",
               data:{text_v:text_v},
               success:function(data)
                 {
                     $("#text_tran").html(data);
                 }
           });
       }); 
    });
</script>
</html>