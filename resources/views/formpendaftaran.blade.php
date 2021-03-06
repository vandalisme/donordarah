@extends('layouthome')
@section('content')
        <article>
        <h1>Form Pendaftaran</h1>
        <p>Silahkan mengisi form dibawah ini untuk menjadi pendonor : </p>
        <form action='{{route('formpendaftaranproses')}}' method='POST'>
            <table width="100%">
                {{csrf_field()}}
                <tr>
                    <td>Username</td> 	<td><input type='text' name='user' required></td>
                </tr>
                <tr>
                    <td>Password</td> 	<td><input type='password' name='pass' required></td>
                </tr>
                <tr>
                    <td width=120px>Nama Lengkap</td> 	<td><input type='text' name='fullname' style='width:55%' required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td> 	<td><input type='text' name='pob' style='width:65%' required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td> 	<td><input type='date' name='dob' required></td>
                </tr>
                <tr>
                    <td>No Telpon</td> 		<td><input   type='text' name='phonenumber' required></td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td> <td><textarea name='address' style='width:100%; height:40px' required></textarea></td>
                </tr>
                <tr>
                    <td>Berat Badan</td> 	<td><input type='number' name='weight' required></td>
                </tr>
                <tr>
                    <td>Gol. Darah</td> 	<td><select name='bloodtype'>
                            @foreach($bloodtypes as $b)
                                <option value="{{$b->id}}">{{$b->name}}</option>
                            @endforeach
                        </select></td>
                </tr>
                <tr>
                    <td>Riwayat Penyakit</td> <td><textarea style='width:100%; height:80px' name='disease_history' required></textarea></td>
                </tr>
                <tr>
                    <td></td> <td><input type="submit" name='submit' value='Kirimkan'></td>
                </tr>
            </table>
        </form>
    </article>
    <br><br>

@endsection
