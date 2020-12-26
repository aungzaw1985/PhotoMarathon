@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        @error('new_nrc')
                       

                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           U can't registered two times with one NRC.
                            
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                         @enderror

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="nrc" class="col-4 col-form-label text-md-right">{{ __('NRC') }}</label>

                            <div class="col-lg-8">
                                <select name="nrc-box" id="nrc-box" class="form-control col-2 float-left">
                                    
                                        <option value="0" selected="true">-</option>	
                                        <option value="1"> 1</option><option value="2"> 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option><option value="6"> 6</option><option value="7"> 7</option><option value="8"> 8</option><option value="9"> 9</option><option value="10"> 10</option><option value="11"> 11</option><option value="12"> 12</option><option value="13"> 13</option><option value="14"> 14</option><option value="15"> 15</option>										

                                </select>
                                <input class="form-control col-1 float-left" type="text" placeholder="/" readonly>
                                <select name="nrc-code" id="nrc-code" class="form-control col-3 float-left">
                                    

                                    
                                        <option value="0" selected="true">-</option>	
                                             <option value="AHGAPA"> AHGAPA</option> 
                                             <option value="AHGAYA"> AHGAYA</option> 
                                             <option value="AHLANA"> AHLANA</option>
                                              <option value="AHMANA"> AHMANA</option> 
                                              <option value="AHMATA"> AHMATA</option> <option value="AHMAYA"> AHMAYA</option> <option value="AHMAZA"> AHMAZA</option> <option value="AHPHANA"> AHPHANA</option> <option value="AHSANA"> AHSANA</option> <option value="AHTANA"> AHTANA</option> <option value="AHYATA"> AHYATA</option> <option value="BAAHNA"> BAAHNA</option> <option value="BAHANA"> BAHANA</option> <option value="BAKALA"> BAKALA</option> <option value="BALAKHA"> BALAKHA</option> <option value="BALANA"> BALANA</option> <option value="BAMANA"> BAMANA</option> <option value="BAPANA"> BAPANA</option> <option value="BATAHTA"> BATAHTA</option> <option value="BATALA"> BATALA</option> <option value="BATHASA"> BATHASA</option> <option value="BATHATA"> BATHATA</option> <option value="DADAYA"> DADAYA</option> <option value="DAGAMA"> DAGAMA</option> <option value="DAGANA"> DAGANA</option> <option value="DAGASA"> DAGASA</option> <option value="DAGATA"> DAGATA</option> <option value="DAGAYA"> DAGAYA</option> <option value="DAKHATHA"> DAKHATHA</option> <option value="DALANA"> DALANA</option> <option value="DAMASA"> DAMASA</option> <option value="DANAPHA"> DANAPHA</option> <option value="DAPANA"> DAPANA</option> <option value="DAPAYA"> DAPAYA</option> <option value="DAPHAYA"> DAPHAYA</option> <option value="DAUNA"> DAUNA</option> <option value="GAGANA"> GAGANA</option> <option value="GAMANA"> GAMANA</option> <option value="HAKAKA"> HAKAKA</option> <option value="HAKHANA"> HAKHANA</option> <option value="HAMALA"> HAMALA</option> <option value="HAMANA"> HAMANA</option> <option value="HAPANA"> HAPANA</option> <option value="HAPATA"> HAPATA</option> <option value="HATHATA"> HATHATA</option> <option value="HTAKHANA"> HTAKHANA</option> <option value="HTALANA"> HTALANA</option> <option value="HTATALA"> HTATALA</option> <option value="HTATAPA"> HTATAPA</option> <option value="HTAWANA"> HTAWANA</option> <option value="KABALA"> KABALA</option> <option value="KADANA"> KADANA</option> <option value="KAHANA"> KAHANA</option> <option value="KAHTANA"> KAHTANA</option> <option value="KAKAHTA"> KAKAHTA</option> <option value="KAKAKA"> KAKAKA</option> <option value="KAKANA"> KAKANA</option> <option value="KAKATA"> KAKATA</option> <option value="KAKAYA"> KAKAYA</option> <option value="KAKHAKA"> KAKHAKA</option> <option value="KAKHANA"> KAKHANA</option> <option value="KALAAH"> KALAAH</option> <option value="KALAHTA"> KALAHTA</option> <option value="KALANA"> KALANA</option> <option value="KALATA"> KALATA</option> <option value="KALAWA"> KALAWA</option> <option value="KAMAMA"> KAMAMA</option> <option value="KAMANA"> KAMANA</option> <option value="KAMATA"> KAMATA</option> <option value="KAMAYA"> KAMAYA</option> <option value="KANANA"> KANANA</option> <option value="KAPAKA"> KAPAKA</option> <option value="KAPALA"> KAPALA</option> <option value="KAPANA"> KAPANA</option> <option value="KAPATA"> KAPATA</option> <option value="KAPHANA"> KAPHANA</option> <option value="KASAKA"> KASAKA</option> <option value="KASANA"> KASANA</option> <option value="KATAKHA"> KATAKHA</option> <option value="KATALA"> KATALA</option> <option value="KATANA"> KATANA</option> <option value="KATATA"> KATATA</option> <option value="KATHANA"> KATHANA</option> <option value="KAWANA"> KAWANA</option> <option value="KAYAYA"> KAYAYA</option> <option value="KHAAHZA"> KHAAHZA</option> <option value="KHABADA"> KHABADA</option> <option value="KHALAPHA"> KHALAPHA</option> <option value="KHAMANA"> KHAMANA</option> <option value="KHAMASA"> KHAMASA</option> <option value="KHAPANA"> KHAPANA</option> <option value="KHAPHANA"> KHAPHANA</option> <option value="KHASANA"> KHASANA</option> <option value="KHATANA"> KHATANA</option> <option value="KHAUNA"> KHAUNA</option> <option value="KHAUTA"> KHAUTA</option> <option value="KHAYAHA"> KHAYAHA</option> <option value="KHAYATA"> KHAYATA</option> <option value="LABANA"> LABANA</option> <option value="LAGANA"> LAGANA</option> <option value="LAHANA"> LAHANA</option> <option value="LAKANA"> LAKANA</option> <option value="LAKHANA"> LAKHANA</option> <option value="LAKHATA"> LAKHATA</option> <option value="LALANA"> LALANA</option> <option value="LAMANA"> LAMANA</option> <option value="LAMATA"> LAMATA</option> <option value="LAPATA"> LAPATA</option> <option value="LATHANA"> LATHANA</option> <option value="LATHAYA"> LATHAYA</option> <option value="LAWANA"> LAWANA</option> <option value="LAYANA"> LAYANA</option> <option value="LAYANA"> LAYANA</option> <option value="MAAHNA"> MAAHNA</option> <option value="MAAHPA"> MAAHPA</option> <option value="MAAHTA"> MAAHTA</option> <option value="MABANA"> MABANA</option> <option value="MADANA"> MADANA</option> <option value="MAGADA"> MAGADA</option> <option value="MAGATA"> MAGATA</option> <option value="MAHAMA"> MAHAMA</option> <option value="MAHAYA"> MAHAYA</option> <option value="MAHTALA"> MAHTALA</option> <option value="MAHTANA"> MAHTANA</option> <option value="MAKANA"> MAKANA</option> <option value="MAKATA"> MAKATA</option> <option value="MAKHABA"> MAKHABA</option> <option value="MAKHANA"> MAKHANA</option> <option value="MAKHATA"> MAKHATA</option> <option value="MALAMA"> MALAMA</option> <option value="MALANA"> MALANA</option> <option value="MAMAKA"> MAMAKA</option> <option value="MAMANA"> MAMANA</option> <option value="MAMATA"> MAMATA</option> <option value="MANAMA"> MANAMA</option> <option value="MANANA"> MANANA</option> <option value="MANATA"> MANATA</option> <option value="MANGANA"> MANGANA</option> <option value="MANYANA"> MANYANA</option> <option value="MAPANA"> MAPANA</option> <option value="MAPATA"> MAPATA</option> <option value="MAPHANA"> MAPHANA</option> <option value="MAPHATA"> MAPHATA</option> <option value="MASAKA"> MASAKA</option> <option value="MASANA"> MASANA</option> <option value="MASATA"> MASATA</option> <option value="MATANA"> MATANA</option> <option value="MATAPA"> MATAPA</option> <option value="MATATA"> MATATA</option> <option value="MATAYA"> MATAYA</option> <option value="MATHANA"> MATHANA</option> <option value="MAUNA"> MAUNA</option> <option value="MAWATA"> MAWATA</option> <option value="MAYAKA"> MAYAKA</option> <option value="MAYAMA"> MAYAMA</option> <option value="MAYANA"> MAYANA</option> <option value="MAYATA"> MAYATA</option> <option value="NAHTAKA"> NAHTAKA</option> <option value="NAKHANA"> NAKHANA</option> <option value="NAKHATA"> NAKHATA</option> <option value="NAMANA"> NAMANA</option> <option value="NAMATA"> NAMATA</option> <option value="NAPHANA"> NAPHANA</option> <option value="NASANA"> NASANA</option> <option value="NATALA"> NATALA</option> <option value="NATANA"> NATANA</option> <option value="NAYANA"> NAYANA</option> <option value="NAYATA"> NAYATA</option> <option value="NGAPATA"> NGAPATA</option> <option value="NGAPHANA"> NGAPHANA</option> <option value="NGASANA"> NGASANA</option> <option value="NGATHAKHA"> NGATHAKHA</option> <option value="NGATHAYA"> NGATHAYA</option> <option value="NGAYAKA"> NGAYAKA</option> <option value="NGAZANA"> NGAZANA</option> <option value="NYALAPA"> NYALAPA</option> <option value="NYATANA"> NYATANA</option> <option value="NYAUNA"> NYAUNA</option> <option value="NYAYANA"> NYAYANA</option> <option value="PABANA"> PABANA</option> <option value="PABATA"> PABATA</option> <option value="PABATHA"> PABATHA</option> <option value="PAKAKHA"> PAKAKHA</option> <option value="PAKAMA"> PAKAMA</option> <option value="PAKANA"> PAKANA</option> <option value="PAKHAKA"> PAKHAKA</option> <option value="PAKHANA"> PAKHANA</option> <option value="PAKHATA"> PAKHATA</option> <option value="PALABA"> PALABA</option> <option value="PALAKA"> PALAKA</option> <option value="PALANA"> PALANA</option> <option value="PALATA"> PALATA</option> <option value="PALAWA"> PALAWA</option> <option value="PAMANA"> PAMANA</option> <option value="PANADA"> PANADA</option> <option value="PANAKA"> PANAKA</option> <option value="PANATA"> PANATA</option> <option value="PAPHANA"> PAPHANA</option> <option value="PASALA"> PASALA</option> <option value="PASANA"> PASANA</option> <option value="PATAAH"> PATAAH</option> <option value="PATANA"> PATANA</option> <option value="PATATA"> PATATA</option> <option value="PATAYA"> PATAYA</option> <option value="PATHAKA"> PATHAKA</option> <option value="PATHANA"> PATHANA</option> <option value="PATHAYA"> PATHAYA</option> <option value="PAULA"> PAULA</option> <option value="PAWANA"> PAWANA</option> <option value="PAYANA"> PAYANA</option> <option value="PAZATA"> PAZATA</option> <option value="PHAKHANA"> PHAKHANA</option> <option value="PHALANA"> PHALANA</option> <option value="PHAMANA"> PHAMANA</option> <option value="PHAPANA"> PHAPANA</option> <option value="PHASANA"> PHASANA</option> <option value="PHAYASA"> PHAYASA</option> <option value="SABATA"> SABATA</option> <option value="SADANA"> SADANA</option> <option value="SAKAKHA"> SAKAKHA</option> <option value="SAKANA"> SAKANA</option> <option value="SAKATA"> SAKATA</option> <option value="SAKHANA"> SAKHANA</option> <option value="SALAKA"> SALAKA</option> <option value="SALANA"> SALANA</option> <option value="SAMANA"> SAMANA</option> <option value="SAPABA"> SAPABA</option> <option value="SAPAWA"> SAPAWA</option> <option value="SAPHANA"> SAPHANA</option> <option value="SASANA"> SASANA</option> <option value="SATANA"> SATANA</option> <option value="SATAYA"> SATAYA</option> <option value="TAKANA"> TAKANA</option> <option value="TAKATA"> TAKATA</option> <option value="TAKHALA"> TAKHALA</option> <option value="TAKHANA"> TAKHANA</option> <option value="TALANA"> TALANA</option> <option value="TAMANA"> TAMANA</option> <option value="TAMANYA"> TAMANYA</option> <option value="TANANA"> TANANA</option> <option value="TANANYA"> TANANYA</option> <option value="TANGANA"> TANGANA</option> <option value="TAPAWA"> TAPAWA</option> <option value="TASANA"> TASANA</option> <option value="TATAKA"> TATAKA</option> <option value="TATANA"> TATANA</option> <option value="TATATA"> TATATA</option> <option value="TATAU"> TATAU</option> <option value="TATHANA"> TATHANA</option> <option value="TATHAYA"> TATHAYA</option> <option value="TAYANA"> TAYANA</option> <option value="TAZANA"> TAZANA</option> <option value="THAGAKA"> THAGAKA</option> <option value="THAHTANA"> THAHTANA</option> <option value="THAKANA"> THAKANA</option> <option value="THAKATA"> THAKATA</option> <option value="THAKHANA"> THAKHANA</option> <option value="THALANA"> THALANA</option> <option value="THANANA"> THANANA</option> <option value="THANAPA"> THANAPA</option> <option value="THAPAKA"> THAPAKA</option> <option value="THAPANA"> THAPANA</option> <option value="THAPHAYA"> THAPHAYA</option> <option value="THASANA"> THASANA</option> <option value="THATAKA"> THATAKA</option> <option value="THATANA"> THATANA</option> <option value="THAWATA"> THAWATA</option> <option value="THAYAKHA"> THAYAKHA</option> <option value="THAYANA"> THAYANA</option> <option value="UKAMA"> UKAMA</option> <option value="UKATA"> UKATA</option> <option value="UTATHA"> UTATHA</option> <option value="WAKHAMA"> WAKHAMA</option> <option value="WALANA"> WALANA</option> <option value="WAMANA"> WAMANA</option> <option value="WATANA"> WATANA</option> <option value="WATHANA"> WATHANA</option> <option value="YABANA"> YABANA</option> <option value="YABANA"> YABANA</option> <option value="YADADA"> YADADA</option> <option value="YAKANA"> YAKANA</option> <option value="YAMANA"> YAMANA</option> <option value="YAMAPA"> YAMAPA</option> <option value="YAMATHA"> YAMATHA</option> <option value="YANAKHA"> YANAKHA</option> <option value="YANGANA"> YANGANA</option> <option value="YAPATHA"> YAPATHA</option> <option value="YAPHANA"> YAPHANA</option> <option value="YASAKA"> YASAKA</option> <option value="YASANA"> YASANA</option> <option value="YATANA"> YATANA</option> <option value="YATAYA"> YATAYA</option> <option value="YATHANA"> YATHANA</option> <option value="YATHATA"> YATHATA</option> <option value="YATHAYA"> YATHAYA</option> <option value="YAUNA"> YAUNA</option> <option value="YAZANA"> YAZANA</option> <option value="ZABATHA"> ZABATHA</option> <option value="ZAKANA"> ZAKANA</option> <option value="ZALANA"> ZALANA</option> <option value="ZAYATHA"> ZAYATHA</option>										<option value="AHGAPA">AHGAPA</option><option value="AHGAYA">AHGAYA</option><option value="AHLANA">AHLANA</option><option value="AHMANA">AHMANA</option><option value="AHMATA">AHMATA</option><option value="AHMAYA">AHMAYA</option><option value="AHMAZA">AHMAZA</option><option value="AHPHANA">AHPHANA</option><option value="AHSANA">AHSANA</option><option value="AHTANA">AHTANA</option><option value="AHYATA">AHYATA</option><option value="BAAHNA">BAAHNA</option><option value="BAHANA">BAHANA</option><option value="BAKALA">BAKALA</option><option value="BALAKHA">BALAKHA</option><option value="BALANA">BALANA</option><option value="BAMANA">BAMANA</option><option value="BAPANA">BAPANA</option><option value="BATAHTA">BATAHTA</option><option value="BATALA">BATALA</option><option value="BATHASA">BATHASA</option><option value="BATHATA">BATHATA</option><option value="DADAYA">DADAYA</option><option value="DAGAMA">DAGAMA</option><option value="DAGANA">DAGANA</option><option value="DAGASA">DAGASA</option><option value="DAGATA">DAGATA</option><option value="DAGAYA">DAGAYA</option><option value="DAKHATHA">DAKHATHA</option><option value="DALANA">DALANA</option><option value="DAMASA">DAMASA</option><option value="DANAPHA">DANAPHA</option><option value="DAPANA">DAPANA</option><option value="DAPAYA">DAPAYA</option><option value="DAPHAYA">DAPHAYA</option><option value="DAUNA">DAUNA</option><option value="GAGANA">GAGANA</option><option value="GAMANA">GAMANA</option><option value="HAKAKA">HAKAKA</option><option value="HAKHANA">HAKHANA</option><option value="HAMALA">HAMALA</option><option value="HAMANA">HAMANA</option><option value="HAPANA">HAPANA</option><option value="HAPATA">HAPATA</option><option value="HATHATA">HATHATA</option><option value="HTAKHANA">HTAKHANA</option><option value="HTALANA">HTALANA</option><option value="HTATALA">HTATALA</option><option value="HTATAPA">HTATAPA</option><option value="HTAWANA">HTAWANA</option><option value="KABALA">KABALA</option><option value="KADANA">KADANA</option><option value="KAHANA">KAHANA</option><option value="KAHTANA">KAHTANA</option><option value="KAKAHTA">KAKAHTA</option><option value="KAKAKA">KAKAKA</option><option value="KAKANA">KAKANA</option><option value="KAKATA">KAKATA</option><option value="KAKAYA">KAKAYA</option><option value="KAKHAKA">KAKHAKA</option><option value="KAKHANA">KAKHANA</option><option value="KALAAH">KALAAH</option><option value="KALAHTA">KALAHTA</option><option value="KALANA">KALANA</option><option value="KALATA">KALATA</option><option value="KALAWA">KALAWA</option><option value="KAMAMA">KAMAMA</option><option value="KAMANA">KAMANA</option><option value="KAMATA">KAMATA</option><option value="KAMAYA">KAMAYA</option><option value="KANANA">KANANA</option><option value="KAPAKA">KAPAKA</option><option value="KAPALA">KAPALA</option><option value="KAPANA">KAPANA</option><option value="KAPATA">KAPATA</option><option value="KAPHANA">KAPHANA</option><option value="KASAKA">KASAKA</option><option value="KASANA">KASANA</option><option value="KATAKHA">KATAKHA</option><option value="KATALA">KATALA</option><option value="KATANA">KATANA</option><option value="KATATA">KATATA</option><option value="KATHANA">KATHANA</option><option value="KAWANA">KAWANA</option><option value="KAYAYA">KAYAYA</option><option value="KHAAHZA">KHAAHZA</option><option value="KHABADA">KHABADA</option><option value="KHALAPHA">KHALAPHA</option><option value="KHAMANA">KHAMANA</option><option value="KHAMASA">KHAMASA</option><option value="KHAPANA">KHAPANA</option><option value="KHAPHANA">KHAPHANA</option><option value="KHASANA">KHASANA</option><option value="KHATANA">KHATANA</option><option value="KHAUNA">KHAUNA</option><option value="KHAUTA">KHAUTA</option><option value="KHAYAHA">KHAYAHA</option><option value="KHAYATA">KHAYATA</option><option value="LABANA">LABANA</option><option value="LAGANA">LAGANA</option><option value="LAHANA">LAHANA</option><option value="LAKANA">LAKANA</option><option value="LAKHANA">LAKHANA</option><option value="LAKHATA">LAKHATA</option><option value="LALANA">LALANA</option><option value="LAMANA">LAMANA</option><option value="LAMATA">LAMATA</option><option value="LAPATA">LAPATA</option><option value="LATHANA">LATHANA</option><option value="LATHAYA">LATHAYA</option><option value="LAWANA">LAWANA</option><option value="LAYANA">LAYANA</option><option value="LAYANA">LAYANA</option><option value="MAAHNA">MAAHNA</option><option value="MAAHPA">MAAHPA</option><option value="MAAHTA">MAAHTA</option><option value="MABANA">MABANA</option><option value="MADANA">MADANA</option><option value="MAGADA">MAGADA</option><option value="MAGATA">MAGATA</option><option value="MAHAMA">MAHAMA</option><option value="MAHAYA">MAHAYA</option><option value="MAHTALA">MAHTALA</option><option value="MAHTANA">MAHTANA</option><option value="MAKANA">MAKANA</option><option value="MAKATA">MAKATA</option><option value="MAKHABA">MAKHABA</option><option value="MAKHANA">MAKHANA</option><option value="MAKHATA">MAKHATA</option><option value="MALAMA">MALAMA</option><option value="MALANA">MALANA</option><option value="MAMAKA">MAMAKA</option><option value="MAMANA">MAMANA</option><option value="MAMATA">MAMATA</option><option value="MANAMA">MANAMA</option><option value="MANANA">MANANA</option><option value="MANATA">MANATA</option><option value="MANGANA">MANGANA</option><option value="MANYANA">MANYANA</option><option value="MAPANA">MAPANA</option><option value="MAPATA">MAPATA</option><option value="MAPHANA">MAPHANA</option><option value="MAPHATA">MAPHATA</option><option value="MASAKA">MASAKA</option><option value="MASANA">MASANA</option><option value="MASATA">MASATA</option><option value="MATANA">MATANA</option><option value="MATAPA">MATAPA</option><option value="MATATA">MATATA</option><option value="MATAYA">MATAYA</option><option value="MATHANA">MATHANA</option><option value="MAUNA">MAUNA</option><option value="MAWATA">MAWATA</option><option value="MAYAKA">MAYAKA</option><option value="MAYAMA">MAYAMA</option><option value="MAYANA">MAYANA</option><option value="MAYATA">MAYATA</option><option value="NAHTAKA">NAHTAKA</option><option value="NAKHANA">NAKHANA</option><option value="NAKHATA">NAKHATA</option><option value="NAMANA">NAMANA</option><option value="NAMATA">NAMATA</option><option value="NAPHANA">NAPHANA</option><option value="NASANA">NASANA</option><option value="NATALA">NATALA</option><option value="NATANA">NATANA</option><option value="NAYANA">NAYANA</option><option value="NAYATA">NAYATA</option><option value="NGAPATA">NGAPATA</option><option value="NGAPHANA">NGAPHANA</option><option value="NGASANA">NGASANA</option><option value="NGATHAKHA">NGATHAKHA</option><option value="NGATHAYA">NGATHAYA</option><option value="NGAYAKA">NGAYAKA</option><option value="NGAZANA">NGAZANA</option><option value="NYALAPA">NYALAPA</option><option value="NYATANA">NYATANA</option><option value="NYAUNA">NYAUNA</option><option value="NYAYANA">NYAYANA</option><option value="PABANA">PABANA</option><option value="PABATA">PABATA</option><option value="PABATHA">PABATHA</option><option value="PAKAKHA">PAKAKHA</option><option value="PAKAMA">PAKAMA</option><option value="PAKANA">PAKANA</option><option value="PAKHAKA">PAKHAKA</option><option value="PAKHANA">PAKHANA</option><option value="PAKHATA">PAKHATA</option><option value="PALABA">PALABA</option><option value="PALAKA">PALAKA</option><option value="PALANA">PALANA</option><option value="PALATA">PALATA</option><option value="PALAWA">PALAWA</option><option value="PAMANA">PAMANA</option><option value="PANADA">PANADA</option><option value="PANAKA">PANAKA</option><option value="PANATA">PANATA</option><option value="PAPHANA">PAPHANA</option><option value="PASALA">PASALA</option><option value="PASANA">PASANA</option><option value="PATAAH">PATAAH</option><option value="PATANA">PATANA</option><option value="PATATA">PATATA</option><option value="PATAYA">PATAYA</option><option value="PATHAKA">PATHAKA</option><option value="PATHANA">PATHANA</option><option value="PATHAYA">PATHAYA</option><option value="PAULA">PAULA</option><option value="PAWANA">PAWANA</option><option value="PAYANA">PAYANA</option><option value="PAZATA">PAZATA</option><option value="PHAKHANA">PHAKHANA</option><option value="PHALANA">PHALANA</option><option value="PHAMANA">PHAMANA</option><option value="PHAPANA">PHAPANA</option><option value="PHASANA">PHASANA</option><option value="PHAYASA">PHAYASA</option><option value="SABATA">SABATA</option><option value="SADANA">SADANA</option><option value="SAKAKHA">SAKAKHA</option><option value="SAKANA">SAKANA</option><option value="SAKATA">SAKATA</option><option value="SAKHANA">SAKHANA</option><option value="SALAKA">SALAKA</option><option value="SAMANA">SAMANA</option><option value="SAPABA">SAPABA</option><option value="SAPAWA">SAPAWA</option><option value="SAPHANA">SAPHANA</option><option value="SASANA">SASANA</option><option value="SATANA">SATANA</option><option value="SATAYA">SATAYA</option><option value="TAKANA">TAKANA</option><option value="TAKATA">TAKATA</option><option value="TAKHALA">TAKHALA</option><option value="TAKHANA">TAKHANA</option><option value="TALANA">TALANA</option><option value="TAMANA">TAMANA</option><option value="TAMANYA">TAMANYA</option><option value="TANANA">TANANA</option><option value="TANANYA">TANANYA</option><option value="TANGANA">TANGANA</option><option value="TAPAWA">TAPAWA</option><option value="TASANA">TASANA</option><option value="TATAKA">TATAKA</option><option value="TATANA">TATANA</option><option value="TATATA">TATATA</option><option value="TATAU">TATAU</option><option value="TATHANA">TATHANA</option><option value="TATHAYA">TATHAYA</option><option value="TAYANA">TAYANA</option><option value="TAZANA">TAZANA</option><option value="THAGAKA">THAGAKA</option><option value="THAHTANA">THAHTANA</option><option value="THAKANA">THAKANA</option><option value="THAKATA">THAKATA</option><option value="THAKHANA">THAKHANA</option><option value="THALANA">THALANA</option><option value="THANANA">THANANA</option><option value="THANAPA">THANAPA</option><option value="THAPAKA">THAPAKA</option><option value="THAPANA">THAPANA</option><option value="THAPHAYA">THAPHAYA</option><option value="THASANA">THASANA</option><option value="THATAKA">THATAKA</option><option value="THATANA">THATANA</option><option value="THAWATA">THAWATA</option><option value="THAYAKHA">THAYAKHA</option><option value="THAYANA">THAYANA</option><option value="UKAMA">UKAMA</option><option value="UKATA">UKATA</option><option value="UTATHA">UTATHA</option><option value="WAKHAMA">WAKHAMA</option><option value="WALANA">WALANA</option><option value="WAMANA">WAMANA</option><option value="WATANA">WATANA</option><option value="WATHANA">WATHANA</option><option value="YABANA">YABANA</option><option value="YABANA">YABANA</option><option value="YADADA">YADADA</option><option value="YAKANA">YAKANA</option><option value="YAMANA">YAMANA</option><option value="YAMAPA">YAMAPA</option><option value="YAMATHA">YAMATHA</option><option value="YANAKHA">YANAKHA</option><option value="YANGANA">YANGANA</option><option value="YAPATHA">YAPATHA</option><option value="YAPHANA">YAPHANA</option><option value="YASAKA">YASAKA</option><option value="YASANA">YASANA</option><option value="YATANA">YATANA</option><option value="YATAYA">YATAYA</option><option value="YATHANA">YATHANA</option><option value="YATHATA">YATHATA</option><option value="YATHAYA">YATHAYA</option><option value="YAUNA">YAUNA</option><option value="YAZANA">YAZANA</option><option value="ZABATHA">ZABATHA</option><option value="ZAKANA">ZAKANA</option><option value="ZALANA">ZALANA</option><option value="ZAYATHA">ZAYATHA</option>

                                </select>

                                <select name="nrc-type" id="nrc-type" class="form-control col-2 float-left">
                                    <option value="-">-</option>

                                    <option value="N">N</option>
                                    <option value="P">Ei</option>
                                    <option value="T">Pyu</option>

                                </select>
                                <input id="nrc" type="text" class="form-control col-4 @error('nrc') is-invalid @enderror" maxlength="6" name="nrc" required >

                                @error('nrc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
