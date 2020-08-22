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
        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle('Cetak - Surat N1');
        $pdf->SetMargins(10, 10 , 10, 10);
        $pdf->SetFont('Times','B',20);

        $pdf->Image('assets\img\logo.png',8,5,30);
        $pdf->Cell(220,7,'PEMERINTAH KABUPATEN BANDUNG',0,2,'C');
        $pdf->Cell(220,7,'KECAMATAN CILEUNYI',0,2,'C');
        $pdf->SetFont('Times','B',20);
        $pdf->Cell(220,7,'KANTOR KEPALA DESA CINUNUK',0,2,'C');
        $pdf->SetFont('Times','B',8.5);
        $pdf->Cell(220,4,'Jl. Raya Cinunuk No. 725 RT 06 RW 07 Kec. Cileunyi Kab. Bandung 40624 Telp. (022) 7815595',0,1,'C');
        $pdf->Cell(220,5,'www.cinunuk.desa.id Email : pemdescinunuk@gmail.com / desacinunuk.bandung@yahoo.com',0,1,'C');

        $pdf->SetLineWidth(0.5);
        $pdf->Line(10, 40, 210-10, 40);
        $pdf->SetLineWidth(0);
        $pdf->ln(10);
        foreach($surat_n1_n6 as $surat){
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20,5,'Nomor',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->Cell(125,5,$surat->no_surat,0,0);
        $pdf->Cell(90,5,"Bandung,". tgl_indo($surat->tanggal_surat),0,0,'L');
        

        $pdf->ln();
        $pdf->Cell(20,5,'Lampiran',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->Cell(50,5,' - ',0,0);

        $pdf->ln();
        $pdf->Cell(20,5,'Perihal',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->SetFont('Times','B',12);
        $pdf->setX(32);
        $pdf->Cell(31,5,'Permohonan Izin Kerja Praktik',0,0);
        

        $pdf->SetFont('Times','',12);
        $pdf->ln(7);
        $pdf->setX(32);
        $pdf->Cell(31,5,'Kepada Yth.',0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(31,5,$surat->nama_intansi,0,0);


        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(31,5,$surat->alamat_intansi,0,0);
        $pdf->SetFont('Times','I',12);
        $pdf->ln(15);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Assalamualaikum Wr.Wb.",0,0);
        
        $pdf->SetFont('Times','',12);
        $pdf->ln(7);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Dekan Fakultas Sains dan Teknologi Universitas Islam Negeri Sunan Gunung Djati",0,0);
        

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Bandung menerangkan bahwa:",0,0);
        
        //TABEL
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(55,6,'Nama',1,0,'C');
        $pdf->Cell(25,6,'NIM',1,0,'C');
        $pdf->Cell(20,6,'Semester',1,0,'C');
        $pdf->Cell(35,6,'Jurusan',1,1,'C');
        

        $no=1;
        $pdf->setX(40);
        $pdf->Cell(10,6,$no++,1,0,'C');
        $pdf->Cell(55,6,$surat->nama_lengkap,1,0,'C');
        $pdf->Cell(25,6,$surat->nim,1,0,'C');
        $pdf->Cell(20,6,$surat->semester,1,0,'C');
        $pdf->Cell(35,6,$surat->jurusan,1,1,'C');
        
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"adalah mahasiswa aktif Fakultas Sains dan Teknologi Universitas Islam Negeri Sunan",0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Gunung Djati Bandung Tahun Akademik 2019/2020, bermaksud Mengajukan Kerja",0,0);
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Praltik pada intansi/perusahaan yang Bapak/Ibu pimpin, yang dilaksanakan pada Tanggal:",0,0);
    
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,tgl_indo($surat->mulai_tgl)." sampai dengan ".tgl_indo($surat->akhir_tgl).".",0,0);

        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Untuk itu kami mohon agar Bapak/Ibu dapat membantu mahasiswa kami dalam",0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"pelaksanaan kegiatan yang dimaksud.",0,0);
    
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Demikian surat ini kami sampaikan, atas perkenan dan kerjasamanya kami ucapkan",0,0);
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"terimakasih.",0,0);
        
        $pdf->SetFont('Times','I',12);
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Wassalamualaikum Wr.Wb.",0,0);

        $pdf->SetFont('Times','',12);
        $pdf->ln();
        $pdf->setY(210);
        $pdf->setX(122);
        $pdf->Cell(20,5,"a.n Dekan",0,0,'L');

        $pdf->ln();
        $pdf->setY(215);
        $pdf->setX(125);
        $pdf->Cell(20,5,"Wakil Dekan Bidang Akademik,",0,0);
        
        $pdf->Image('assets\image\My_Gallery.png',139,225);
        $pdf->ln();
        $pdf->SetFont('Times','B',12);
        $pdf->setY(255);
        $pdf->setX(125);
        $pdf->Cell(20,5,"Dr. Yudha Satya Perkasa,M.Si",0,0);

        $pdf->SetFont('Times','',12);
        $pdf->ln();
        $pdf->setY(260);
        $pdf->setX(125);
        $pdf->Cell(20,5,'NIP. 197911172011011005',0,0);

        $pdf->ln();
        $pdf->setY(267);
        $pdf->setX(20);
        $pdf->Cell(20,5,"Tembusan",0,0,'L');

        $pdf->ln();
        $pdf->setY(271.5);
        $pdf->setX(20);
        $pdf->Cell(20,5,"Dekan Fakultas Sains dan Teknologi (UIN Sunan Gunung Djati Bandung)",0,0,'L');
    }
$pdf->Output();
?>
