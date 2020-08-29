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
        foreach($surat_n4 as $surat){
        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle('Cetak - Surat N4');
        $pdf->SetMargins(25, 10 , 25);
        $pdf->SetFont('Times','B',12);
        $pdf->ln(10);
        $pdf->Cell(0,10,'FORMULIR PERSETUJUAN CALON PENGANTIN',0,2,'C');
        $pdf->SetFont('Times','BU',12);
        $pdf->ln();
        $pdf->Cell(0,5,'PERSETUJUAN CALON PENGANTIN',0,2,'C'); 
        $pdf->ln(); 
      
        $today=mdate('%Y-%m-%d', now());
      
        $pdf->ln(10);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20,5,'Yang bertanda tangan di bawah ini:',0,0);
        $pdf->ln();
        if($surat->jenis_kelamin=="Laki-Laki"){
            $pdf->Cell(20,5,'A. Calon Suami:',0,0);
        }else{
            $pdf->Cell(20,5,'A. Calon Istri:',0,0);
        }
        $pdf->SetMargins(30, 10 , 25);
        $pdf->ln(); 
        $pdf->Cell(20,5,'1. Nama',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->nama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Bin',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->binti,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->no_nik,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->tempat_lahir.", ".tgl_indo($surat->tanggal_lahir),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->kewarganegaraan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->agama,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->pekerjaan,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->alamat.", RT ".$surat->rt." RW ".$surat->rw,0,0);
        $pdf->SetMargins(25, 10 , 25);
        $pdf->ln(10);
        
        if($surat->jenis_kelamin_calon=="Perempuan"){
            $pdf->Cell(20,5,'B. Calon Istri:',0,0);
        }else{
            $pdf->Cell(20,5,'B. Calon Suami:',0,0);
        }
        $pdf->SetMargins(30, 10 , 25);
        $pdf->ln();
        $pdf->Cell(20,5,'1. Nama',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->nama_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'2. Bin',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->binti_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'3. Nomor Induk Kependudukan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->nik_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'4. Tempat dan tanggal lahir',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->tempat_lahir_calon.", ".tgl_indo($surat->tanggal_lahir_calon),0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'5. Kewarganegaraan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->kewarganegaraan_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'6. Agama:',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->agama_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'7. Pekerjaan',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->pekerjaan_calon,0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'8. Alamat:',0,0);
        $pdf->Cell(40,5,':',0,0,'R');
        $pdf->Cell(20,5,$surat->alamat_calon.", RT ".$surat->rt_calon." RW ".$surat->rw_calon,0,0);
        $pdf->SetMargins(25, 10 , 25);
        $pdf->ln(10);
        $pdf->Cell(20,5,'Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa ada',0,0);
        $pdf->ln();
        $pdf->Cell(20,5,'paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.',0,0);
        $pdf->ln(10);
        $pdf->Cell(20,5,'Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.',0,0);
        $pdf->setY(235);
        $pdf->setX(140);
        $pdf->Cell(20,5,"Bandung, ".tgl_indo($today),0,0,'L');
        $pdf->ln();
        $pdf->setY(240);
        $pdf->setX(140);
        $pdf->Cell(20,5,"Calon Istri",0,0,'L');
        $pdf->setY(260);
        $pdf->setX(140);
        $pdf->Cell(20,5,"______________________",0,0,'L');
        $pdf->setY(240);
        $pdf->setX(30);
        $pdf->Cell(20,5,"Calon Suami",0,0,'L');
        $pdf->setY(260);
        $pdf->setX(30);
        $pdf->Cell(20,5,"______________________",0,0,'L');
    }
    
        $pdf->Output();
?>
