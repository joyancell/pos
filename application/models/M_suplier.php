<?php
class M_suplier extends CI_Model
{

	function hapus_suplier($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_suplier where suplier_id='$kode'");
		return $hsl;
	}

	function update_suplier($kode, $nama, $alamat, $notelp, $email)
	{
		$hsl = $this->db->query("UPDATE tbl_suplier set suplier_nama='$nama',suplier_alamat='$alamat',suplier_notelp='$notelp',suplier_email='$email' where suplier_id='$kode'");
		return $hsl;
	}

	function tampil_suplier()
	{
		$hsl = $this->db->query("select * from tbl_suplier order by suplier_id desc");
		return $hsl;
	}

	function simpan_suplier($nama, $alamat, $notelp, $email)
	{
		$hsl = $this->db->query("INSERT INTO tbl_suplier(suplier_nama,suplier_alamat,suplier_notelp, suplier_email) VALUES ('$nama','$alamat','$notelp', '$email')");
		return $hsl;
	}
}
