<!DOCTYPE html>
<html lang="eng">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/price.css">
<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <title>Price</title>
</head>
<body onload="call_ajax()">
<ul class="topnav" id="myTopnav">
  <li><a href="index.php" style="padding: 2px 0 0 0;"><img src="../images/download (1).png" style="width: 180px; height: 52px; display: inline-block; padding:0;"></a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="about-us.php">About Us</a></li>
  <li><a href="cars.php">Cars</a></li>
  <li><a href="Gallery.php">Gallery</a></li>
  <li><a href="price.php" style="background-color: cornflowerblue; color:white;text-shadow: 2px 2px 5px black;">Price</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>



<button class="tablink" onclick="openPage('Home', this, '#00BFFF')" id="defaultOpen">price</button>
<button class="tablink" onclick="openPage('News', this, '#00BFFF')">News</button>
<button class="tablink" onclick="openPage('Contact', this, '#00BFFF')">Contact</button>

<div id="Home" class="tabcontent">
  <table id="CarPriceTable">
  <tr>
    <th style="width:50%">Cars</th>
    <th>Price</th>
    <th>Apply</th>
  </tr>
  <!-- <tr>
    <td><img src="../images/lacetti.png"><big>Lacetti</big></td>
    <td>
      <p>SX MT: 102.250.000 <small>sum</small></p> 
      <p>CDX MT: 116.600.000 <small>sum</small></p>
      <p>CDX AT: 123.506.000 <small>sum</small></p>
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/nexia.png"><big>Nexia</big></td>
    <td>
      <p>LS MT: 70.683.000 <small>sum</small></p> 
      <p>LT MT: 73.230.000 <small>sum</small></p>
      <p>LTZ AT: 85.970.000 <small>sum</small></p>
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/spark.png"><big>Spark</big></td>
    <td>
      <p>L MT: 61.530.000 <small>sum</small></p> 
      <p>LS MT: 64.616.000 <small>sum</small></p>
      <p>LT AT: 74.064.000 <small>sum</small></p>
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/matiz.png"><big>Matiz</big></td>
    <td>
      <p>M MT: 42.567.000 <small>sum</small></p> 
      <p>MX b.k: 44.670.000 <small>sum</small></p>
      <p>MX b.k: 45.985.000 <small>sum</small></p>
      <p>MX b.k best: 47.552.000 <small>sum</small></p>
      <p>MX c.k best: 48.840.000 <small>sum</small></p>
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/malibu.png"><big>Malibu</big></td>
    <td>
      <p>SX MT: 231.4350.000 <small>sum</small></p> 
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/captiva.png"><big>Captiva</big></td>
    <td>
      <p>SX MT: 229.820.000 <small>sum</small></p> 
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>
  <tr>
    <td><img src="../images/damas.png"><big>Damas</big></td>
    <td>
      <p>VAN: 48.542.000 <small>sum</small></p> 
      <p>DLX: 51.080.000 <small>sum</small></p>
    </td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr> 
  <tr>
    <td><img src="../images/cobalt.png"><big>Cobalt</big>
    </td>
    <td><p>TC s.k: 83.866.000 <small>sum</small></p> 
      <p>LTZ MT: 89.828.000 <small>sum</small></p>
      <p>LTZ AT: 97.183.000 <small>sum</small></p></td>
    <td><span class="fa fa-id-card-o" class="apply" onclick="openform()"></span></td>
  </tr>-->
</table>
</div>

<div id="News" class="tabcontent">
  <h3><center style="font-size: 25px; color: white;">News</center></h3>
  <form>
  <input id="search" type="text" name="search" placeholder="Search.."><h4 style="font-size: 200%; padding-top:4px; margin-top: 50px; position: relative;" class="fa fa-search"></h4>
</form>

<div class="maind">
<div class="arow">

  <div class="acolumn">
    <div class="acontent">
      <img src="../images/pexels-photo-70912.jpeg" style="width:80%; height: 120px; margin-left:10%">
      <h3>GM-Uzbekistan</h3>
      <p>dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.</p>
    </div>
  </div>

  <div class="acolumn">
    <div class="acontent">
      <img src="../images/Plant2-superJumbo.jpg" style="width:80%; height: 120px; margin-left:10%">
      <h3>GM-Uzbekistan</h3>
      <p>dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.</p>
    </div>
  </div>

  <div class="acolumn">
    <div class="acontent">
      <img src="../images/Chevrolet-Aveo-Mexico-2012(1).jpg" style="width:80%; height: 120px; margin-left:10%">
      <h3>GM-Uzbekistan</h3>
      <p>dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.</p>
    </div>
  </div>

  <div class="acolumn">
    <div class="acontent">
      <img src="../images/2014-Impala-Interior.jpg" style="width:80%; height: 120px; margin-left:10%">
      <h3>GM-Uzbekistan</h3>
      <p>dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.</p>
    </div>
  </div>

 <div id="matn" class="in2">
  <img src="../images/download (6).jpg">  dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
    dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
</div>

<div id="right-matn" class="in2r">
  <img src="../images/images (14).jpg">  dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
    dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
</div>

<div id="matn" class="in2">
  <img src="../images/images (17).jpg">  dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
    dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
</div>

<div id="right-matn" class="in2r">
  <img src="../images/images.png">  dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
    dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf. 
</div>

<div id="matn" class="in2">
  <img src="../images/download (5).jpg">  dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
    dasd jjhfsef dadjjaw dakijrf asbydyh djeukfhs ndaduhsdu dasd rrrfs nugulsmeu kukhhuksef suehhs shfes su
      esfkms sflsemlf slfse smefseij feskj8 sekjljf slfnlne iitkkr bbsdm ,mljdjha bdadj jgghfhef hlklukhef  hudhjdh
      snsdnn nsdnsadn fduhfuh usfheshf hwdnk awdjdl ssfjse isefisef seuhufd sfusduf sdjldsjf sdfisdhf sifnknsdf uhdkjfsd
    dsfjdf jsdf idsf jsdfjlk hdshfn sdhfjk,m fsdlklkf ihdufh sdhfuib fsdj sdfhk  ygrfetf ghsdg sdggsdf.
</div>
</div>
</div>


</div>

<div id="Contact" class="tabcontent">
  <h3 style="font-size: 25px; color: white;"><center>Contact</center></h3>
  <div class="container1">
  <form id="forr">
    <label for="fname" style="float: left;">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." style="">

    <label for="lname" style="float: left;">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="">

    <label for="lname" style="float: left;">E-mail Address</label>
    <input type="text" id="mail" name="email" placeholder="Your E-mail.." style="">

    <label for="subject" style="float: left;">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write your question or recommendation.." style="height:200px"></textarea>

    <input type="submit" value="Submit" id="sub" back>
  </form>
</div><br>
<h3><center style="color: white;">Our E-Mail | GM_UZB.@mail.ru</center></h3>
</div>





<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2><center>Apply Form</center></h2>
    </div>
    <div class="modal-body">
    <div class="container">
  <div>
    <div class="row">
    
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Father's Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="mname" placeholder="Your father name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Passport</label></div>
      <div class="col-75">
        <input type="text" id="passport" name="lastname" placeholder="Your last name.." value="AA">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Passport Copy</label>
      </div>
      <div class="col-75">
        <input type="file" id="passport_copy" name="Choose">
      </div>
    </div>
    <div class="row">
    <div class="col-25">
        <label for="country">Branch</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="malibu">Andijan</option>
          <option value="captiva">Bukhara</option>
          <option value="lacetti">Fergana</option>
          <option value="lacetti">Jizzakh</option>
          <option value="lacetti">Namangan</option>
          <option value="lacetti">Navoi</option>
          <option value="lacetti">Qashkadarya</option>
          <option value="lacetti">Qoraqalpakhstan</option>
          <option value="lacetti">Syrdarya</option>
          <option value="lacetti">Samarkand</option>
          <option value="lacetti">Tashkent</option>
          <option value="lacetti">Xorezm</option>
        </select>
      </div>
    </div>
    <div class="row">
    <div class="col-25">
        <label for="country">Car</label>
      </div>
      <div class="col-75">
        <select id="cars" name="cars">
          <option value="malibu">malibu</option>
          <option value="captiva">captiva</option>
          <option value="lacetti">lacetti</option>
          <option value="lacetti">cobalt</option>
          <option value="lacetti">spark</option>
          <option value="lacetti">damas</option>
          <option value="lacetti">nexia</option>
          <option value="lacetti">matiz</option>
          <option value="lacetti">orlando</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Apply Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="myDate" value="2018-03-23">
      </div>
    </div>
    <div class="row">
      <input type="submit" onclick="booking()">
    </div>
  </div>
</div>
    </div>
    <div class="modal-footer">
      <h3 style="color: white; text-align: center;">GM-Uzbekistan</h3>
    </div>
  </div>
</div>
<script type="text/javascript" src="../js/price.js">
</script>
</body>
</html>