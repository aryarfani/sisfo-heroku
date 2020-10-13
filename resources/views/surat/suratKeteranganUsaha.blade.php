<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan</title>
    <style>
        .line-title {
            border: 0;
            border-style: ;
            border-top: 2px solid #000;
        }

    </style>
</head>

<body>
    <img src="assets/images/home/logo_kediri.jpg" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1; font-weight: bold;">
                    PEMERINTAH KOTA KEDIRI
                    <br>
                    KECAMATAN MOJOROTO
                    <br>
                    KANTOR KEPALA DESA LIRBOYO
                    <br>
                    <span style="font-style: italic; font-size: 12px">Jl. Semeru Gg. II No.31, Lirboyo, Kec. Mojoroto, Kota Kediri, Jawa Timur 64117</span>
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <div align="center">
        <span style="font-weight: bold; text-decoration: underline; font-size: 14px">SURAT KETERANGAN USAHA</span> <br>
        <span style="font-weight: bold; font-size: 14px">NOMOR: 475.6/ /Pem/2020</span>
    </div>
    <p>Yang bertanda tangan dibawah ini Kepala Desa Kediri Kecamatan Mojoroto Kota Kediri, menerangkan dengan sebenarnya :</p>

    <br>
    <table align="left" style="width: 100%;">
        <tr>
            <td height="20" width="130">Nama </td>
            <td height="20" width="10">:</td>
            <td height="20">{{ $data->nama }}</td>
        </tr>
        <tr>
            <td height="20" width="130">Jenis Kelamin </td>
            <td height="20" width="10">:</td>
            <td height="20">{{ $data->jenis_kelamin == 1 ? "Laki - Laki" : "Perempuan"}}</td>
        </tr>
        <tr>
            <td height="20" width="130">Tempat, Tanggal Lahir </td>
            <td height="20" width="10">:</td>
            <td height="20">{{ $data->ttl }}</td>
        </tr>
        <tr>
            <td height="20" width="130">Status</td>
            <td height="20" width="10">:</td>
            <td height="20">{{ $data->status }}</td>
        </tr>
        <tr>
            <td height="20" width="130">Alamat</td>
            <td height="20" width="10">:</td>
            <td height="20">{{ $data->alamat }}</td>
        </tr>
        <tr>
            <td height="50"></td>
        </tr>
        <tr>
            <td colspan="3">
                <span style="line-height: 1;">
                    Nama tersebut adalah benar penduduk kami yang mempunyai usaha :
                    <br>
                    <P style="font-weight: bold; text-align: center; text-decoration: underline; font-size: 14px">{{ $data->nama_usaha }}</P>
                    Demikian surat keterangan ini dibuat agar diunakan sebagai mana mestinya
                </span>
            </td>
        </tr>
        <tr>
            <td height="30"></td>
        </tr>
        <tr align="center">
            <td height="20" width="130"> </td>
            <td height="20" width="10"></td>
            <td>
                <p>
                    Kediri, 20 0ktober 2020
                    <br>
                    Kepala Desa Lirboyo
                </p>
                <br>
                <br>
                <P style="font-weight: bold;  text-decoration: underline; font-size: 14px">Agung Gumelar</P>

            </td>
        </tr>
    </table>


</body>

</html>
