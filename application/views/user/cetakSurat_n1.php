<?php 
        function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
        
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
        function getRomawi($bln){
            switch ($bln){
                case 1: 
                    return "I";
                    break;
                case 2:
                    return "II";
                    break;
                case 3:
                    return "III";
                    break;
                case 4:
                    return "IV";
                    break;
                case 5:
                    return "V";
                    break;
                case 6:
                    return "VI";
                    break;
                case 7:
                    return "VII";
                    break;
                case 8:
                    return "VIII";
                    break;
                case 9:
                    return "IX";
                    break;
                case 10:
                    return "X";
                    break;
                case 11:
                    return "XI";
                    break;
                case 12:
                    return "XII";
                    break;
            }
}
        foreach($surat_n1 as $surat){
        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle('Cetak - Surat N1');
        $pdf->SetMargins(10, 10 , 10, 10);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(200,15,'',0,2,'C');
        $pdf->Cell(200,20,'FORMULIR PENGANTAR NIKAH',0,2,'C');
        $pdf->Cell(100,5,'KANTOR DESA/KELURAHAN  :  '.$surat->desa,0,2);
        $pdf->Cell(100,5,'KECAMATAN                                :  '.$surat->kecamatan,0,2,);
        $pdf->Cell(100,5,'KABUPATEN/KOTA                     :  '.$surat->kab_kota,0,2);
        $pdf->SetFont('Times','BU',12);
        $pdf->ln();
        $pdf->Cell(200,5,'PENGANTAR NIKAH',0,2,'C'); 
        $pdf->ln(); 
        $pdf->SetFont('Times','B',12);     
        $bulan=mdate('%m', now());
        $romawi = getRomawi($bulan);
        $tahun=mdate('%Y', now());
        $pdf->Cell(200,1,'Nomor:  '."474.2/"."          /DS/".$romawi."/".$tahun,0,0,'C');
        $pdf->ln(10);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20,5,'Yang bertanda tangan di bawah ini menjelaskan dengan sesungguhnya bahwa:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'1. Nama:'.$surat->nama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Nomor Induk Kependudukan (NIK):'.$surat->no_nik,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Jenis Kelamin:'.$surat->jenis_kelamin,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir:'.$surat->tempat_lahir.", ".tgl_indo($surat->tanggal_lahir),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan:'.$surat->kewarganegaraan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:'.$surat->agama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan:'.$surat->pekerjaan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:'.$surat->alamat,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'9. Status Pernikahan:'.$surat->status_nikah,0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'Adalah benar anak dari pernikahan seorang pria:',0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'Nama Lengkap dan alias:'.$surat->nama_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Nomor Induk Kependudukan (NIK):'.$surat->nik_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Tempat dan tanggal lahir:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Kewarganaan:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Agama:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Pekerjaan:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Alamat:',0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'dengan seorang wanita:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Nama Lengkap dan alias:'.$surat->nama_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Nomor Induk Kependudukan (NIK):'.$surat->nik_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Tempat dan tanggal lahir:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Kewarganaan:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Agama:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Pekerjaan:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Alamat:',0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'Demikian, surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'dipergunkaan sebagaimana mestinya.',0,0);
    }
        $pdf->Output();
?>
