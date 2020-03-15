<?php
	//Kas Masuk
  $jan = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(januari) AS totJan, SUM(bayarJan) AS sumJan FROM kas_masuk WHERE januari<>'' AND tahun='$tahun'"));
  $totJan = $jan['totJan'];
  $sumJan = $jan['sumJan'];
  $jan_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JANUARI' AND tahun='$tahun'"));
  $totMasukLainJan = $jan_lain['sumNominal'];
  $total_januari = $sumJan+$totMasukLainJan;

  $feb = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(februari) AS totFeb, SUM(bayarFeb) AS sumFeb FROM kas_masuk WHERE februari<>'' AND tahun='$tahun'"));
  $totFeb = $feb['totFeb'];
  $sumFeb = $feb['sumFeb'];
  $feb_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'FEBRUARI' AND tahun='$tahun'"));
  $totMasukLainFeb = $feb_lain['sumNominal'];
  $total_februari = $sumFeb+$totMasukLainFeb;

  $mar = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(maret) AS totMar, SUM(bayarMar) AS sumMar FROM kas_masuk WHERE maret<>'' AND tahun='$tahun'"));
  $totMar = $mar['totMar'];
  $sumMar = $mar['sumMar'];
  $mar_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'MARET' AND tahun='$tahun'"));
  $totMasukLainMar = $mar_lain['sumNominal'];
  $total_maret = $sumMar+$totMasukLainMar;

  $apr = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(april) AS totApr, SUM(bayarApr) AS sumApr FROM kas_masuk WHERE april<>'' AND tahun='$tahun'"));
  $totApr = $apr['totApr'];
  $sumApr = $apr['sumApr'];
  $apr_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'APRIL' AND tahun='$tahun'"));
  $totMasukLainApr = $apr_lain['sumNominal'];
  $total_april = $sumApr+$totMasukLainApr;

  $mei = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(mei) AS totMei, SUM(bayarMei) AS sumMei FROM kas_masuk WHERE mei<>'' AND tahun='$tahun'"));
  $totMei = $mei['totMei'];
  $sumMei = $mei['sumMei'];
  $mei_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'MEI' AND tahun='$tahun'"));
  $totMasukLainMei = $mei_lain['sumNominal'];
  $total_mei = $sumMei+$totMasukLainMei;

  $jun = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(juni) AS totJun, SUM(bayarJun) AS sumJun FROM kas_masuk WHERE juni<>'' AND tahun='$tahun'"));
  $totJun = $jun['totJun'];
  $sumJun = $jun['sumJun'];
  $jun_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JUNI' AND tahun='$tahun'"));
  $totMasukLainJun = $jun_lain['sumNominal'];
  $total_juni = $sumJun+$totMasukLainJun;

  $jul = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(juli) AS totJul, SUM(bayarJul) AS sumJul FROM kas_masuk WHERE juli<>'' AND tahun='$tahun'"));
  $totJul = $jul['totJul'];
  $sumJul = $jul['sumJul'];
  $jul_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JULI' AND tahun='$tahun'"));
  $totMasukLainJul = $jul_lain['sumNominal'];
  $total_juli = $sumJul+$totMasukLainJul;

  $agu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(agustus) AS totAgu, SUM(bayarAgu) AS sumAgu FROM kas_masuk WHERE agustus<>'' AND tahun='$tahun'"));
  $totAgu = $agu['totAgu'];
  $sumAgu = $agu['sumAgu'];
  $agu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'AGUSTUS' AND tahun='$tahun'"));
  $totMasukLainAgu = $agu_lain['sumNominal'];
  $total_agustus = $sumAgu+$totMasukLainAgu;

  $sep = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(september) AS totSep, SUM(bayarSep) AS sumSep FROM kas_masuk WHERE september<>'' AND tahun='$tahun'"));
  $totSep = $sep['totSep'];
  $sumSep = $sep['sumSep'];
  $sep_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'SEPTEMBER' AND tahun='$tahun'"));
  $totMasukLainSep = $sep_lain['sumNominal'];
  $total_september = $sumSep+$totMasukLainSep;

  $okt = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(oktober) AS totOkt, SUM(bayarOkt) AS sumOkt FROM kas_masuk WHERE oktober<>'' AND tahun='$tahun'"));
  $totOkt = $okt['totOkt'];
  $sumOkt = $okt['sumOkt'];
  $okt_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'OKTOBER' AND tahun='$tahun'"));
  $totMasukLainOkt = $okt_lain['sumNominal'];
  $total_oktober = $sumOkt+$totMasukLainOkt;

  $nov = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(november) AS totNov, SUM(bayarNov) AS sumNov FROM kas_masuk WHERE november<>'' AND tahun='$tahun'"));
  $totNov = $nov['totNov'];
  $sumNov = $nov['sumNov'];
  $nov_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'NOVEMBER' AND tahun='$tahun'"));
  $totMasukLainNov = $nov_lain['sumNominal'];
  $total_november = $sumNov+$totMasukLainNov;

  $des = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(desember) AS totDes, SUM(bayarDes) AS sumDes FROM kas_masuk WHERE desember<>'' AND tahun='$tahun'"));
  $totDes = $des['totDes'];
  $sumDes = $des['sumDes'];
  $des_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'DESEMBER' AND tahun='$tahun'"));
  $totMasukLainDes = $des_lain['sumNominal'];
  $total_desember = $sumDes+$totMasukLainDes;
?>