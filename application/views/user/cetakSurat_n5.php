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
        foreach($surat_n5 as $surat){
        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle('Cetak - Surat N6');
        $pdf->SetMargins(25, 10 , 25);
        $pdf->SetFont('Times','B',12);
        $pdf->ln(10);
        $pdf->Cell(0,10,'FORMULIR SURAT IZIN ORANG TUA',0,2,'C');
        $pdf->SetFont('Times','BU',12);
        $pdf->ln();
        $pdf->Cell(0,5,'SURAT IZIN ORANG TUA',0,2,'C'); 
        $today=mdate('%Y-%m-%d', now());
        $pdf->ln(10);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20,5,'Yang bertanda tangan di bawah ini:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'A. 1. Nama lengkap dan alias:'.$surat->nama_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Bin:'.$surat->binti_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan:'.$surat->nik_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir : '.$surat->tempat_lahir_ayah.", ".tgl_indo($surat->tanggal_lahir_ayah),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan:'.$surat->kewarganegaraan_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:'.$surat->agama_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan:'.$surat->pekerjaan_ayah,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:'.$surat->alamat_ayah." RT ".$surat->rt_ayah." RW ".$surat->rw_ayah,0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'B. 1. Nama lengkap dan alias:'.$surat->nama_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Binti:'.$surat->binti_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan:'.$surat->nik_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir : '.$surat->tempat_lahir_ibu.", ".tgl_indo($surat->tanggal_lahir_ibu),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan:'.$surat->kewarganegaraan_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:'.$surat->agama_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan:'.$surat->pekerjaan_ibu,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:'.$surat->alamat_ibu." RT ".$surat->rt_ibu." RW ".$surat->rw_ibu,0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'adalah ayah dan ibu kandung/wali/pengampu dari:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'1. Nama lengkap dan alias:'.$surat->nama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Bin/Binti:'.$surat->binti,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan:'.$surat->no_nik,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir : '.$surat->tempat_lahir.", ".tgl_indo($surat->tanggal_lahir),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan:'.$surat->kewarganegaraan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:'.$surat->agama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan:'.$surat->pekerjaan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:'.$surat->alamat." RT ".$surat->rt." RW ".$surat->rw,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Memberikan izin kepada anak kami untuk melakukan pernikahan dengan:',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'1. Nama lengkap dan alias:'.$surat->nama_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Bin/Binti:'.$surat->binti_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan:'.$surat->nik_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir : '.$surat->tempat_lahir_calon.", ".tgl_indo($surat->tanggal_lahir_calon),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan:'.$surat->kewarganegaraan_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:'.$surat->agama_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan:'.$surat->pekerjaan_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:'.$surat->alamat_calon." RT ".$surat->rt_calon." RW ".$surat->rw_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'Demikian surat izin ini dibuat dengan kesadaran tanpa ada paksaan dari siapapun',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'dan untuk digunakan seperlunya.',0,0);
        $pdf->setY(235);
        $pdf->setX(122);
        $pdf->Cell(20,5,"Bandung, ".tgl_indo($today),0,0,'L');
        $pdf->ln();
        $pdf->setY(240);
        $pdf->setX(122);
        $pdf->Cell(20,5,"Ibu/wali/pengampu",0,0,'L');
        $pdf->setY(260);
        $pdf->setX(122);
        $pdf->Cell(20,5,"_________________",0,0,'L');
        $pdf->setY(240);
        $pdf->setX(30);
        $pdf->Cell(20,5,"Ayah/wali/pengampu",0,0,'L');
        $pdf->setY(260);
        $pdf->setX(30);
        $pdf->Cell(20,5,"______________________",0,0,'L');
    }
    
        $pdf->Output();
?>
