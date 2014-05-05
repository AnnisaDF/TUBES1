 <html>
<head>
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Web Page Annisa Dyah Fauzia</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
     <script type="text/javascript" language="javascript">
     now = new Date
    expireDate = new Date
    expireDate.setMonth(expireDate.getMonth()+6)
    hitCt = parseInt(cookieVal("pageHit"))
    hitCt++
    lastVisit = cookieVal("pageVisit")
    if (lastVisit == 0) {
    lastVisit = ""
    }

    document.cookie = "pageHit="+hitCt+";expires=" + expireDate.toGMTString()
    document.cookie = "pageVisit="+now+";expires=" + expireDate.toGMTString()
    function cookieVal(cookieName) {
        thisCookie = document.cookie.split("; ")
         for (i=0; i<thisCookie.length; i++) {
            if (cookieName == thisCookie[i].split("=")[0]) {
                return thisCookie[i].split("=")[1]
            }
       }
      return 0
    }
    </script>
</head>
<body>
<div class="top">
	<div class="header">
		<div class="left">
			
		</div>
		<div class="right">
		<img style="width:210px;height:150px;" src="img/me.jpg"></img>	
		</div>
	</div>	
</div>
<div class="container">	
	<div class="navigation">
		<a href="index.php">Home</a>
		<a href="aboutme.html">About Me</a>
		<a href="parseweb.php">Contoh Parse Web</a>
		<iframe src="clock.htm" style="border:0;height:30px;position:absolute;right:110px;width:400px;"></iframe>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		<div class="content">
		<p style="font-size:12pt;">Ini adalah contoh parse website "http://detik.com" (hanya berita popularnya saja) dengan PHP </p>
		<style>
		{margin: 0; padding: 0;}
ul {
  list-style-type: none;
  width: 400px;
  display: block;
  padding: 0px;
  
  border: 1px solid #f1f1f1;
  -webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;
  -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.055);
     -moz-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.055);
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
       -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

h6  {
  font: bold 14px/1.5 Helvetica, Verdana, sans-serif; 
}


li img {
  float: left;
  margin: 0 15px 0 0; 
}


li p {

  font: 200 12px/1.5 Georgia, Times New Roman, serif;

}


li {

  padding: 10px;

  overflow: auto;

  border-bottom:1px dotted #E4E4E4;

  background: #F8F8F8;

}

li:nth-child(odd) { background: #fff; }



li:hover {

  background: #eee;

  cursor: pointer;

}

a{ text-decoration:none; color:#000;

}
		</style>
		<?php
function readHTML($url){
      $data = curl_init();
      curl_setopt($data, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($data, CURLOPT_URL, $url);
      $result = curl_exec($data);
             curl_close($data);
              return $result;
         }
         $codeHTML =  readHTML('http://www.detik.com');
         $explode = explode('<ul id="popular">', $codeHTML);
         $explodeAgain = explode('</ul>', $explode[1]);
         echo "<ul>".$explodeAgain[0]."</ul>";
         ?>		
		
		</div>
		<div style="width:500px;position:absolute;bottom:0;margin:0;padding:0;color:blue;font-weight:bold;font-size:11px;">
    
</div>
		<div class="sidenav">
<div id="catalog">
			<h2><span>Kalendar</span></h2>
			<div class="contents">
	
			<iframe src="kalendar.htm" style="width:202px;padding:0px;margin:0px;left:0px;height:187px;border:solid 1px red;">dsdsd</iframe>
			</div>
		</div>
		<br/>
		<div id="books_search">
			<h2><span>Web Links</span></h2>
			
		</div>
		</div>
		<div class="clearer"><span></span></div>
	</div>
	<div class="footer">Annisa Dyah Fauzia  &copy; 
	</div>
</div>
</body>
</html>