<?php
include_once('database.php');
class M_khach_hang extends Database
{
    public function ThemKhachHang($data)
    {
        $this->setQuery('insert into bs_nguoi_dung(`id_loai_user`,`ho_ten`, `phai`, `email`, `dia_chi`, `dien_thoai`) values(?,?,?,?,?,?)');
        $this->execute(array('1',$data['ho_ten'], $data['phai'], $data['email'], $data['dia_chi'], $data['dien_thoai']));
        return $this->_dbh->lastInsertId();
    }
    public function ThemDonDatHang($data)
    {
        $this->setQuery('insert into bs_don_hang( `tong_tien`, `ngay_dat` , `id_nguoi_dung`, `ho_ten_nguoi_nhan`, `email_nguoi_nhan`,`so_dien_thoai_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ghi_chu`) values(?,?,?,?,?,?,?,?)');
        $this->execute(array($data['tong_tien'], $data['ngay_dat'], $data['id_nguoi_dung'],$data['ho_ten_nguoi_nhan'], $data['email_nguoi_nhan'], $data['so_dien_thoai_nguoi_nhan'], $data['dia_chi_nguoi_nhan'], $data['ghi_chu']));
        return $this->_dbh->lastInsertId();
    }
    public function ThemChiTietHoaDon($data)
    {
        $this->setQuery('insert into bs_chi_tiet_don_hang(`id_don_hang`, `id_sach`, `so_luong`, `don_gia`, `thanh_tien`) values(?,?,?,?,?)');
        return $this->execute(array($data['id_don_hang'], $data['id_sach'], $data['so_luong'], $data['don_gia'], $data['thanh_tien']));
    }
    public function DonDatHang($SoHD)
    {
        $chuoiSQL='SELECT `ho_ten_nguoi_nhan`, `email_nguoi_nhan`, `so_dien_thoai_nguoi_nhan`, `dia_chi_nguoi_nhan`,`tong_tien`, `ngay_dat`, bs_chi_tiet_don_hang.id_sach, bs_chi_tiet_don_hang.so_luong ,  `ghi_chu` FROM `bs_don_hang` INNER JOIN bs_chi_tiet_don_hang ON id_don_hang = bs_don_hang.id  WHERE `id_don_hang` = ?';
        $this->setQuery($chuoiSQL);
        return $this->loadAllRows(array($SoHD));
        
    }
   
}
?>