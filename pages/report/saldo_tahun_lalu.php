<?php
			  $janLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(januari) AS totjanLalu, SUM(bayarJan) AS sumjanLalu FROM kas_masuk WHERE januari<>'' AND tahun='$tahunLalu'"));
			  $totjanLalu = $janLalu['totjanLalu'];
			  $sumjanLalu = $janLalu['sumjanLalu'];
			  $janLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JANUARI' AND tahun='$tahunLalu'"));
			  $totMasukLainjanLalu = $janLalu_lain['sumNominal'];
			  $total_janLaluuari = $sumjanLalu+$totMasukLainjanLalu;

			  $febLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(februari) AS totfebLalu, SUM(bayarFeb) AS sumfebLalu FROM kas_masuk WHERE februari<>'' AND tahun='$tahunLalu'"));
			  $totfebLalu = $febLalu['totfebLalu'];
			  $sumfebLalu = $febLalu['sumfebLalu'];
			  $febLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'FEBRUARI' AND tahun='$tahunLalu'"));
			  $totMasukLainfebLalu = $febLalu_lain['sumNominal'];
			  $total_febLaluruari = $sumfebLalu+$totMasukLainfebLalu;

			  $marLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(maret) AS totmarLalu, SUM(bayarMar) AS summarLalu FROM kas_masuk WHERE maret<>'' AND tahun='$tahunLalu'"));
			  $totmarLalu = $marLalu['totmarLalu'];
			  $summarLalu = $marLalu['summarLalu'];
			  $marLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'maret' AND tahun='$tahunLalu'"));
			  $totMasukLainmarLalu = $marLalu_lain['sumNominal'];
			  $total_marLaluet = $summarLalu+$totMasukLainmarLalu;

			  $aprLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(april) AS totaprLalu, SUM(bayarApr) AS sumaprLalu FROM kas_masuk WHERE april<>'' AND tahun='$tahunLalu'"));
			  $totaprLalu = $aprLalu['totaprLalu'];
			  $sumaprLalu = $aprLalu['sumaprLalu'];
			  $aprLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'APRIL' AND tahun='$tahunLalu'"));
			  $totMasukLainaprLalu = $aprLalu_lain['sumNominal'];
			  $total_aprLaluil = $sumaprLalu+$totMasukLainaprLalu;

			  $meiLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(mei) AS totmeiLalu, SUM(bayarMei) AS summeiLalu FROM kas_masuk WHERE mei<>'' AND tahun='$tahunLalu'"));
			  $totmeiLalu = $meiLalu['totmeiLalu'];
			  $summeiLalu = $meiLalu['summeiLalu'];
			  $meiLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'MEI' AND tahun='$tahunLalu'"));
			  $totMasukLainmeiLalu = $meiLalu_lain['sumNominal'];
			  $total_meiLalu = $summeiLalu+$totMasukLainmeiLalu;

			  $junLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(juni) AS totjunLalu, SUM(bayarJun) AS sumjunLalu FROM kas_masuk WHERE juni<>'' AND tahun='$tahunLalu'"));
			  $totjunLalu = $junLalu['totjunLalu'];
			  $sumjunLalu = $junLalu['sumjunLalu'];
			  $junLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JUNI' AND tahun='$tahunLalu'"));
			  $totMasukLainjunLalu = $junLalu_lain['sumNominal'];
			  $total_junLalui = $sumjunLalu+$totMasukLainjunLalu;

			  $julLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(juli) AS totjulLalu, SUM(bayarJul) AS sumjulLalu FROM kas_masuk WHERE juli<>'' AND tahun='$tahunLalu'"));
			  $totjulLalu = $julLalu['totjulLalu'];
			  $sumjulLalu = $julLalu['sumjulLalu'];
			  $julLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'JULI' AND tahun='$tahunLalu'"));
			  $totMasukLainjulLalu = $julLalu_lain['sumNominal'];
			  $total_julLalui = $sumjulLalu+$totMasukLainjulLalu;

			  $aguLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(agustus) AS totaguLalu, SUM(bayarAgu) AS sumaguLalu FROM kas_masuk WHERE agustus<>'' AND tahun='$tahunLalu'"));
			  $totaguLalu = $aguLalu['totaguLalu'];
			  $sumaguLalu = $aguLalu['sumaguLalu'];
			  $aguLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'AGUSTUS' AND tahun='$tahunLalu'"));
			  $totMasukLainaguLalu = $aguLalu_lain['sumNominal'];
			  $total_aguLalustus = $sumaguLalu+$totMasukLainaguLalu;

			  $sepLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(september) AS totsepLalu, SUM(bayarSep) AS sumsepLalu FROM kas_masuk WHERE september<>'' AND tahun='$tahunLalu'"));
			  $totsepLalu = $sepLalu['totsepLalu'];
			  $sumsepLalu = $sepLalu['sumsepLalu'];
			  $sepLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totMasukLainsepLalu = $sepLalu_lain['sumNominal'];
			  $total_sepLalutember = $sumsepLalu+$totMasukLainsepLalu;

			  $oktLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(oktober) AS totoktLalu, SUM(bayarOkt) AS sumoktLalu FROM kas_masuk WHERE oktober<>'' AND tahun='$tahunLalu'"));
			  $totoktLalu = $oktLalu['totoktLalu'];
			  $sumoktLalu = $oktLalu['sumoktLalu'];
			  $oktLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'OKTOBER' AND tahun='$tahunLalu'"));
			  $totMasukLainoktLalu = $oktLalu_lain['sumNominal'];
			  $total_oktLaluober = $sumoktLalu+$totMasukLainoktLalu;

			  $novLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(november) AS totnovLalu, SUM(bayarNov) AS sumnovLalu FROM kas_masuk WHERE november<>'' AND tahun='$tahunLalu'"));
			  $totnovLalu = $novLalu['totnovLalu'];
			  $sumnovLalu = $novLalu['sumnovLalu'];
			  $novLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'NOVEMBER' AND tahun='$tahunLalu'"));
			  $totMasukLainnovLalu = $novLalu_lain['sumNominal'];
			  $total_novLaluember = $sumnovLalu+$totMasukLainnovLalu;

			  $desLalu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(desember) AS totdesLalu, SUM(bayarDes) AS sumdesLalu FROM kas_masuk WHERE desember<>'' AND tahun='$tahunLalu'"));
			  $totdesLalu = $desLalu['totdesLalu'];
			  $sumdesLalu = $desLalu['sumdesLalu'];
			  $desLalu_lain = mysqli_fetch_array(mysqli_query($conn, "SELECT  SUM(nominal) AS sumNominal FROM kas_masuk_lain WHERE bulan = 'DESEMBER' AND tahun='$tahunLalu'"));
			  $totMasukLaindesLalu = $desLalu_lain['sumNominal'];
			  $total_desLaluember = $sumdesLalu+$totMasukLaindesLalu;

			  //Kas Keluar
			  $janLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluSampah = $janLaluSampah['sumNominal'];
			  $janLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluSecurity = $janLaluSecurity['sumNominal'];
			  $janLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluListrik = $janLaluListrik['sumNominal'];
			  $janLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluAqua = $janLaluAqua['sumNominal'];
			  $janLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluTaman = $janLaluTaman['sumNominal'];
			  $janLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='JANUARI' AND tahun='$tahunLalu'"));
			  $totjanLaluLain = $janLaluLain['sumNominal'];
			  $totPengeluaranjanLalu = $totjanLaluSampah+$totjanLaluSecurity+$totjanLaluListrik+$totjanLaluAqua+$totjanLaluTaman+$totjanLaluLain;

			  $febLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluSampah = $febLaluSampah['sumNominal'];
			  $febLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluSecurity = $febLaluSecurity['sumNominal'];
			  $febLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluListrik = $febLaluListrik['sumNominal'];
			  $febLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluAqua = $febLaluAqua['sumNominal'];
			  $febLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluTaman = $febLaluTaman['sumNominal'];
			  $febLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='FEBRUARI' AND tahun='$tahunLalu'"));
			  $totfebLaluLain = $febLaluLain['sumNominal'];
			  $totPengeluaranfebLalu = $totfebLaluSampah+$totfebLaluSecurity+$totfebLaluListrik+$totfebLaluAqua+$totfebLaluTaman+$totfebLaluLain;

			  $marLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluSampah = $marLaluSampah['sumNominal'];
			  $marLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluSecurity = $marLaluSecurity['sumNominal'];
			  $marLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluListrik = $marLaluListrik['sumNominal'];
			  $marLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluAqua = $marLaluAqua['sumNominal'];
			  $marLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluTaman = $marLaluTaman['sumNominal'];
			  $marLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='MARET' AND tahun='$tahunLalu'"));
			  $totmarLaluLain = $marLaluLain['sumNominal'];
			  $totPengeluaranmarLalu = $totmarLaluSampah+$totmarLaluSecurity+$totmarLaluListrik+$totmarLaluAqua+$totmarLaluTaman+$totmarLaluLain;

			  $aprLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluSampah = $aprLaluSampah['sumNominal'];
			  $aprLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluSecurity = $aprLaluSecurity['sumNominal'];
			  $aprLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluListrik = $aprLaluListrik['sumNominal'];
			  $aprLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluAqua = $aprLaluAqua['sumNominal'];
			  $aprLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluTaman = $aprLaluTaman['sumNominal'];
			  $aprLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='APRIL' AND tahun='$tahunLalu'"));
			  $totaprLaluLain = $aprLaluLain['sumNominal'];
			  $totPengeluaranaprLalu = $totaprLaluSampah+$totaprLaluSecurity+$totaprLaluListrik+$totaprLaluAqua+$totaprLaluTaman+$totaprLaluLain;

			  $meiLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluSampah = $meiLaluSampah['sumNominal'];
			  $meiLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluSecurity = $meiLaluSecurity['sumNominal'];
			  $meiLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluListrik = $meiLaluListrik['sumNominal'];
			  $meiLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluAqua = $meiLaluAqua['sumNominal'];
			  $meiLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluTaman = $meiLaluTaman['sumNominal'];
			  $meiLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='MEI' AND tahun='$tahunLalu'"));
			  $totmeiLaluLain = $meiLaluLain['sumNominal'];
			  $totPengeluaranmeiLalu = $totmeiLaluSampah+$totmeiLaluSecurity+$totmeiLaluListrik+$totmeiLaluAqua+$totmeiLaluTaman+$totmeiLaluLain;

			  $junLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluSampah = $junLaluSampah['sumNominal'];
			  $junLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluSecurity = $junLaluSecurity['sumNominal'];
			  $junLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluListrik = $junLaluListrik['sumNominal'];
			  $junLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluAqua = $junLaluAqua['sumNominal'];
			  $junLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluTaman = $junLaluTaman['sumNominal'];
			  $junLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='JUNI' AND tahun='$tahunLalu'"));
			  $totjunLaluLain = $junLaluLain['sumNominal'];
			  $totPengeluaranjunLalu = $totjunLaluSampah+$totjunLaluSecurity+$totjunLaluListrik+$totjunLaluAqua+$totjunLaluTaman+$totjunLaluLain;

			  $julLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluSampah = $julLaluSampah['sumNominal'];
			  $julLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluSecurity = $julLaluSecurity['sumNominal'];
			  $julLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluListrik = $julLaluListrik['sumNominal'];
			  $julLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluAqua = $julLaluAqua['sumNominal'];
			  $julLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluTaman = $julLaluTaman['sumNominal'];
			  $julLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='JULI' AND tahun='$tahunLalu'"));
			  $totjulLaluLain = $julLaluLain['sumNominal'];
			  $totPengeluaranjulLalu = $totjulLaluSampah+$totjulLaluSecurity+$totjulLaluListrik+$totjulLaluAqua+$totjulLaluTaman+$totjulLaluLain;

			  $aguLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluSampah = $aguLaluSampah['sumNominal'];
			  $aguLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluSecurity = $aguLaluSecurity['sumNominal'];
			  $aguLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluListrik = $aguLaluListrik['sumNominal'];
			  $aguLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluAqua = $aguLaluAqua['sumNominal'];
			  $aguLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluTaman = $aguLaluTaman['sumNominal'];
			  $aguLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='AGUSTUS' AND tahun='$tahunLalu'"));
			  $totaguLaluLain = $aguLaluLain['sumNominal'];
			  $totPengeluaranaguLalu = $totaguLaluSampah+$totaguLaluSecurity+$totaguLaluListrik+$totaguLaluAqua+$totaguLaluTaman+$totaguLaluLain;

			  $sepLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluSampah = $sepLaluSampah['sumNominal'];
			  $sepLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluSecurity = $sepLaluSecurity['sumNominal'];
			  $sepLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluListrik = $sepLaluListrik['sumNominal'];
			  $sepLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluAqua = $sepLaluAqua['sumNominal'];
			  $sepLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluTaman = $sepLaluTaman['sumNominal'];
			  $sepLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='SEPTEMBER' AND tahun='$tahunLalu'"));
			  $totsepLaluLain = $sepLaluLain['sumNominal'];
			  $totPengeluaransepLalu = $totsepLaluSampah+$totsepLaluSecurity+$totsepLaluListrik+$totsepLaluAqua+$totsepLaluTaman+$totsepLaluLain;

			  $oktLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluSampah = $oktLaluSampah['sumNominal'];
			  $oktLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluSecurity = $oktLaluSecurity['sumNominal'];
			  $oktLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluListrik = $oktLaluListrik['sumNominal'];
			  $oktLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluAqua = $oktLaluAqua['sumNominal'];
			  $oktLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluTaman = $oktLaluTaman['sumNominal'];
			  $oktLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='OKTOBER' AND tahun='$tahunLalu'"));
			  $totoktLaluLain = $oktLaluLain['sumNominal'];
			  $totPengeluaranoktLalu = $totoktLaluSampah+$totoktLaluSecurity+$totoktLaluListrik+$totoktLaluAqua+$totoktLaluTaman+$totoktLaluLain;

			  $novLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluSampah = $novLaluSampah['sumNominal'];
			  $novLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluSecurity = $novLaluSecurity['sumNominal'];
			  $novLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluListrik = $novLaluListrik['sumNominal'];
			  $novLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluAqua = $novLaluAqua['sumNominal'];
			  $novLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluTaman = $novLaluTaman['sumNominal'];
			  $novLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='NOVEMBER' AND tahun='$tahunLalu'"));
			  $totnovLaluLain = $novLaluLain['sumNominal'];
			  $totPengeluarannovLalu = $totnovLaluSampah+$totnovLaluSecurity+$totnovLaluListrik+$totnovLaluAqua+$totnovLaluTaman+$totnovLaluLain;

			  $desLaluSampah = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '5' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluSampah = $desLaluSampah['sumNominal'];
			  $desLaluSecurity = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '1' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluSecurity = $desLaluSecurity['sumNominal'];
			  $desLaluListrik = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '2' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluListrik = $desLaluListrik['sumNominal'];
			  $desLaluAqua = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '3' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluAqua = $desLaluAqua['sumNominal'];
			  $desLaluTaman = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '4' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluTaman = $desLaluTaman['sumNominal'];
			  $desLaluLain = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) AS sumNominal FROM kas_keluar WHERE jenis_pengeluaran = '6' AND bulan='DESEMBER' AND tahun='$tahunLalu'"));
			  $totdesLaluLain = $desLaluLain['sumNominal'];
			  $totPengeluarandesLalu = $totdesLaluSampah+$totdesLaluSecurity+$totdesLaluListrik+$totdesLaluAqua+$totdesLaluTaman+$totdesLaluLain;


			  $saldoKasjanLalu = $total_janLaluuari-$totPengeluaranjanLalu;
			  $saldoKasfebLalu = $total_febLaluruari-$totPengeluaranfebLalu;
			  $saldoKasmarLalu = $total_marLaluet-$totPengeluaranmarLalu;
			  $saldoKasaprLalu = $total_aprLaluil-$totPengeluaranaprLalu;
			  $saldoKasmeiLalu = $total_meiLalu-$totPengeluaranmeiLalu;
			  $saldoKasjunLalu = $total_junLalui-$totPengeluaranjunLalu;
			  $saldoKasjulLalu = $total_julLalui-$totPengeluaranjulLalu;
			  $saldoKasaguLalu = $total_aguLalustus-$totPengeluaranaguLalu;
			  $saldoKassepLalu = $total_sepLalutember-$totPengeluaransepLalu;
			  $saldoKasoktLalu = $total_oktLaluober-$totPengeluaranoktLalu;
			  $saldoKasnovLalu = $total_novLaluember-$totPengeluarannovLalu;
			  $saldoKasdesLalu = $total_desLaluember-$totPengeluarandesLalu;

			  $saldoTerakhir = $saldoKasjanLalu+$saldoKasfebLalu+$saldoKasmarLalu+$saldoKasaprLalu+$saldoKasmeiLalu+$saldoKasjunLalu+$saldoKasjulLalu+$saldoKasaguLalu+$saldoKassepLalu+$saldoKasoktLalu+$saldoKasnovLalu+$saldoKasdesLalu;
?>