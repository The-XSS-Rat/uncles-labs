<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8L64ZBYXXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8L64ZBYXXW');
</script>

<script>
$(function() {
    $('#getData').click(function(event) {
        event.preventDefault();

        $.ajax({
            type: "GET",
            url: "endPoint.php",
            data : { field2_name : $('#file').val() },
            beforeSend: function(){
            }
            , complete: function(){
            }
            , success: function(html){
            }
        });
    });
});

</script>


<form id="comment_form" action="endPoint.php" method="GET">
	Find the solution over at <a href=solutions.txt>solutions.txt</a><br>
    Enter the file you would like to view:<br>
    For example
    <ul>
    <li>test.txt</li>
    <li>test2.txt</li>
    <li>and possibly even my <u>secret</u> text file</li>
	</ul>
    <input type="text" class="text_cmt" name="field2_name" id="file"/>
    <input type="submit" name="submit" value="submit" id = "getData"/>
    <input type='hidden' name='parent_id' id='parent_id' value='0'/>
</form>
<hr>

<form id="comment_form" action="endPoint-2.php" method="GET">
	This form is the same as the above it but it has a filter added to it.<br>
    <input type="text" class="text_cmt" name="field2_name" id="file"/>
    <input type="submit" name="submit" value="submit" id = "getData"/>
    <input type='hidden' name='parent_id' id='parent_id' value='0'/>
</form>


<hr>
You can also try our <a href=rat.php>rat lab special</a>
<div id="displayParse">
</div>