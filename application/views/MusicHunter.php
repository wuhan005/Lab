                <div class="dashhead">
                    <div class="dashhead-titles">
                        <h6 class="dashhead-subtitle">Tools</h6>
                        <h2 class="dashhead-title">Music Hunter</h2>
                    </div>

                    <div class="btn-toolbar dashhead-toolbar">
                    </div>
                </div>
                <hr class="mt-3">

        <!-- Form begin-->
        <div class="control-group">     
        <label class="control-label" for="input01">Auth Key</label>
        <div class="controls">
            <input id="key" type="text" placeholder="Auth Key" class="input-xlarge" style="width:800px">
        </div>
        
        <label class="control-label" for="input01">Music Mid</label>
        <div class="controls">
            <input id="musicMid" type="text" placeholder="Music Mid" class="input-xlarge">
        </div>
        
        <hr class="mt-3">
        
        <label class="control-label" for="input01">Music Title</label>
        <div class="controls">
            <input id="musicTitle" type="text" placeholder="Music Title" class="input-xlarge">
        </div>
         <!-- Button -->
         <div class="controls">
         </br>
			<button class="btn btn-primary" type="button" onClick="getKey()"> 1.Get Key!</button>
            </br></br>
            <button class="btn btn-primary" type="button" onClick="getMusicList()"> 2.Get Music!</button>
            </br></br>
            <button class="btn btn-primary" type="button" onClick="getMusic()"> 3.Hunt it!</button>
            </br></br>
          </div>
          <audio controls id="player">
 			 <source src="" type="audio/mpeg">
		  </audio>
        </div>
        
        <hr class="mt-3">
        Music inside our soul.
        </br>
        2017.11.24 / John Wu / Coding in 体育节
  
<script>

	function getKey(){
		Ajax(
		"https://c.y.qq.com/base/fcgi-bin/fcg_musicexpress.fcg?json=3&guid=233",
		"jsonCallback",
		"GET",
		function(data){$("#key").attr({value:data["key"]})})
		};
		
	function getMusicList(){
		var songName = $("#musicTitle").val();
		Ajax(
		'http://c.y.qq.com/soso/fcgi-bin/search_cp?p=1&n=3&w=' + songName + '&aggr=1&lossless=1&cr=1',
		"callback",
		'GET',
		function(data){
			$("#musicMid").attr(
			{value:data["data"]["song"]["list"][0]["media_mid"]})
			}
		)
	}
	function getMusic(){
		url = 'http://dl.stream.qqmusic.qq.com/M800' + $("#musicMid").val() +'.mp3?vkey=' + $("#key").val() + '&guid=233&fromtag=30';
		$("#player").attr({src:url});
	}
	

    function Ajax(Url,Callback,Type,Success){
			
			$.ajax({ 
			url:Url, 
			type:Type, 
 			dataType:'JSONP',  // 处理Ajax跨域问题
			jsonpCallback: Callback,

			success: function(data){Success(data);},
				
			error: function(error){
                console.log("读取失败");
            }})
    }

</script>
