<!doctype html>
<html>
<head><link href="css/Ticketcss.css" rel="stylesheet" type="text/css"> </head>
  
<div id="HTMLtoPDF">
<div class="main-content">
  <div class="ticket">
    <div class="ticket__main">
      <div class="header">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;الخطوط الليبية </div>
      <div class="info passenger">
        <div class="info__item"> YOUR NAME</div>
        <div class="info__detail"> <?php
                              $name=$_POST['name'];
                              echo "$name";
                              ?>
          </div>
      </div>
      <div class="info platform" style="color: black;">
        <p><span>Booking</span></p>
        <p><span> Your </span></p>
      <p><span> Ticket </span></p>
      <p> <span>LIVE </span></p>
        <span></span></div>
      <div class="info departure">
        <div class="info__item">PASSPORT NUMBER</div>
        <div class="info__detail"><?php
                              $pass=$_POST['passport'];
                              echo "$pass";
                              ?></div>
      </div>
      <div class="info arrival">
        <div class="info__item">AIR LINES</div>
        <div class="info__detail"><?php
                              $air=$_POST['air'];
                              echo "$air";
                              ?></div>
      </div>
      <div class="info date">
        <div class="info__item">Date</div>
        <div class="info__detail">
          </div>
      </div>
      <div class="info time">
        <div class="info__item">FROM</div>
        <div class="info__detail"><?php
                              $from=$_POST['from'];
                              echo "$from";
                              ?></div>
      <div class="info carriage">
        <div class="info__item">TO</div>
        <div class="info__detail"><?php
                              $to=$_POST['to'];
                              echo "$to";
                              ?></div>
      <div class="info seat">
        <div class="info__item">TIME</div>
        <div class="info__detail">10:00AM</div>
      </div>
<div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id">001256733</div>
      </div>
    </div>
    <div class="ticket__side">
      <div class="logo">
        <p> &nbsp;  مكان الجلوس </p>
      </div>
      <div class="info side-arrive">
        <div class="info__item">Arrive</div>
        <div class="info__detail">خط الرحلة</div>
      </div>
      <div class="info side-depart">
        <div class="info__item">SEAT NUMBER</div>
        <div class="info__detail">C4</div>
      </div>
      <div class="info side-date">
        <div class="info__item">Date</div>
        <div class="info__detail"><?php
                              $date=$_POST['date'];
                              echo "$date";
                              ?></div>
      </div>
      <div class="info side-time">
        <div class="info__item">Time</div>
        <div class="info__detail">11:00AM</div>
      </div>
      <div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id">001256733</div>
      </div>
    </div>
  </div>
</div>
  </div>
  
    <input type=button class="button" name=print value="Print" id="printPageButton" onClick="window.print()">

  
</html>