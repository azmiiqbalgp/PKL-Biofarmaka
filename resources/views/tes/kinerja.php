
<style type="text/css">
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.a {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
}
</style>
<h3 align="center">Form Input Kinerja Pegawai</h3>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<hr />
<form id="form1" name="form1" method="post" action="">
  <table align="center">
    <tr>
      <td>Pegawai</td>
      <td>:</td>
      <td>
      
      <input type="hidden" name="id_pegawai" value=""/>
      <input type="hidden" name="bulansekarang" value=""/>
      <input type="text" name="nama" value="" disabled="disabled" /></td>
    </tr>
    <tr>
      <td>Tugas</td>
      <td>:</td>
      <td><textarea name="tugas" id="tugas" required placeholder="Tugas yang dikerjakan"></textarea></td>
    </tr>
    <tr>
      <td>Target</td>
      <td>:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><table width="100%" border="1">
        <tr>
          <td>Senin</td>
          <td>Selasa</td>
          <td>Rabu</td>
          <td>Kamis</td>
          <td>Jumat</td>
          <td>Sabtu</td>
          <td>Minggu</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="senin_t" id="senin_t" /></td>
          <td><input type="checkbox" name="selasa_t" id="selasa_t" /></td>
          <td><input type="checkbox" name="rabu_t" id="rabu_t" /></td>
          <td><input type="checkbox" name="kamis_t" id="kamis_t" /></td>
          <td><input type="checkbox" name="jumat_t" id="jumat_t" /></td>
          <td><input type="checkbox" name="sabtu_t" id="sabtu_t" /></td>
          <td><input type="checkbox" name="minggu_t" id="minggu_t" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>Realisasi</td>
      <td>:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><table width="100%" border="1">
        <tr>
          <td>Senin</td>
          <td>Selasa</td>
          <td>Rabu</td>
          <td>Kamis</td>
          <td>Jumat</td>
          <td>Sabtu</td>
          <td>Minggu</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="senin_r" id="senin_r" /></td>
          <td><input type="checkbox" name="selasa_r" id="checkbox8" /></td>
          <td><input type="checkbox" name="rabu_r" id="checkbox9" /></td>
          <td><input type="checkbox" name="kamis_r" id="checkbox10" /></td>
          <td><input type="checkbox" name="jumat_r" id="checkbox11" /></td>
          <td><input type="checkbox" name="sabtu_r" id="checkbox12" /></td>
          <td><input type="checkbox" name="minggu_r" id="checkbox12" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>Minggu Ke</td>
      <td>:</td>
      <td><select name="minggu" id="minggu" required>
      <option value="</option>
      <option value="">----</option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
      <option value="V">V</option>

      </select></td>
    </tr>
    <tr>
      <td>Bulan</td>
      <td>:</td>
      <td>
     
        		<input type="date" value="" name="bulan" id="bulan" />
      
      </td>
    </tr>
    <tr>
      <td>Hasil</td>
      <td>:</td>
      <td><textarea name="hasil" id="hasil" required placeholder="Tugas yang telah dicapai"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
	 
                <input type="submit" class="btn" name="ubah" value="UBAH"></td>
    </tr>
  </table>
  </form>
  <table width="100%" border="1">
  	<tr>
    	<td>Nama</td>
        <td>:</td>
        <td colspan="19"> Bulan :
		</td>
    </tr>
    <tr>
      <td rowspan="3"><div align="center">No</div></td>
      <td rowspan="3"><div align="center">Tugas yang diberikan/direncanakan</div></td>
      <td colspan="7"><div align="center">Target Penyelesaian</div></td>
      <td colspan="7"><div align="center">Realisasi Penyelesaian</div></td>
      <td rowspan="3"><div align="center">Hasil/Produk yang dihasilkan</div></td>
      <td rowspan="3"><div align="center">Minggu Ke</div></td>
      <td rowspan="3"><div align="center">Bulan</div></td>
      <td colspan="2" rowspan="3"><div align="center">Pilihan</div></td>
    </tr>
    <tr>
      <td colspan="7"><div align="center">Hari</div></td>
      <td colspan="7"><div align="center">Hari</div></td>
    </tr>
    <tr>
      <td><div align="center">Senin</div></td>
      <td><div align="center">Selasa</div></td>
      <td><div align="center">Rabu</div></td>
      <td><div align="center">Kamis</div></td>
      <td><div align="center">Jumat</div></td>
      <td><div align="center">Sabtu</div></td>
      <td><div align="center">Minggu</div></td>
      <td><div align="center">Senin</div></td>
      <td><div align="center">Selasa</div></td>
      <td><div align="center">Rabu</div></td>
      <td><div align="center">Kamis</div></td>
      <td><div align="center">Jumat</div></td>
      <td><div align="center">Sabtu</div></td>
      <td><div align="center">Minggu</div></td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td><input type="checkbox" name="senin_t1"  id="senin_r2"  readonly/></td>
      <td><input type="checkbox" name="selasa_t1" id="selasa_t2"  readonly/></td>
      <td><input type="checkbox" name="rabu_t1" id="rabu_t2"  readonly/></td>
      <td><input type="checkbox" name="kamis_t1" id="kamis_t2"  readonly/></td>
      <td><input type="checkbox" name="jumat_t1" id="jumat_t2"  readonly/></td>
      <td><input type="checkbox" name="sabtu_t1" id="sabtu_t2"  readonly/></td>
      <td><input type="checkbox" name="miinggu_t1" id="minggu_t2"  readonly/></td>
      <td><input type="checkbox" name="senin_r1" id="senin_r3"  readonly/></td>
      <td><input type="checkbox" name="selasa_r1" id="checkbox"  readonly/></td>
      <td><input type="checkbox" name="rabu_r1" id="checkbox2"  readonly/></td>
      <td><input type="checkbox" name="kamis_r1" id="checkbox3"  readonly/></td>
      <td><input type="checkbox" name="jumat_r1" id="checkbox4" /></td>
      <td><input type="checkbox" name="sabtu_r1" id="checkbox5"  readonly/></td>
      <td><input type="checkbox" name="minggu_r1" id="checkbox5"  readonly/></td>
      <td></td>
      <td><div align="center"></div></td>
      <td></td>
      <td align="center"><a href="?menu=ikinerja&hapus&id=" onClick="return confirm('Hapus record ?')" title="Hapus Data?"><img src="../images/b_drop.png"></a></td>
      <td colspan="2"><a href="?menu=ikinerja&edit&id="><img src="../images/b_edit.png" title="Edit Kinerja?"></a></td>
    </tr>
   
    </table>