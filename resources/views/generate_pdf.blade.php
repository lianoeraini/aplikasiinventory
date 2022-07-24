<!DOCTYPE html>
<html>
<head>
    <title>Laporan Stok Gudang</title>
</head>
<body>
    <img src="{{ public_path('images/logocmm.png') }}"  style="width: 432px; height: 121px;"/>
    <p>{{$address1}} {{$address2}} {{$address3}}</p>
  <h1>{{ $heading}}</h1>
  <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
        <table style="
                    font-family: 'Open Sans';
                    border: 1px solid #9c9c9c;
                    border-collapse: collapse;
                    width: 100%;
                ">
                <thead> 
                    <tr style="border: 1px solid #9c9c9c"> 
                        <th style="padding: 18px 8px; text-align: center">No</th> 
                        <th style="padding: 18px 8px; text-align: center">Tanggal</th> 
                        <th style="padding: 18px 8px; text-align: center">Nama Barang</th> 
                        <th style="padding: 18px 8px; text-align: center">Barang Masuk</th> 
                        <th style="padding: 18px 8px; text-align: center">Barang Keluar</th> 
                        <th style="padding: 18px 8px; text-align: center">Stok</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($reports as $index => $report) 
                    <tr style="border: 1px solid #9c9c9c; {{ ($index + 1) % 2 == 0 ? 'background-color: #ececec' : '' }}"> 
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{$index+1}}</td> 
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{ $report->date}}</td> 
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{ $report->nm_brg}}</td> 
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{ $report->brngmasuk}}</td>
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{ $report->brngkeluar}}</td> 
                        <td style="
                                padding: 18px 8px;
                                border-top: 1px solid #9c9c9c;
                                text-align: center
                            ">{{ number_format($report->stok)}}</td>
                    </tr> 
                    @endforeach 
                </tbody> 
        </table> 
</div>
</body>
</html>