<?php
class myclass1
{
	
	public function connect()
	{
		$con = mysqli_connect("localhost","root","","nhom2_qlkho");
		if(!$con)
		{
			echo 'Không kết nối được csdl';
			exit();
		}
	}
	
	
	public function thongtinbbbt($sql)
	{
		$link = $this -> connect();
		$ketqua = mysqli_query( $link,"select * from bienbanyeucauboithuong");
		$i = mysqli_num_rows($ketqua);
		if ($i >0)
		{
			$dem =1;
			while ($row=mysqli_fetch_array($ketqua))
			{
				$MaBienBan = $row['MaBienBan'];
				$ngayLap = $row['ngayLap'];
				$ThongTinSuCo = $row['ThongTinSuCo'];
				$MaSanPham = $row['MaSanPham'];
				$HinhAnhHoacTaiLieuMinhHoa = $row['HinhAnhHoacTaiLieuMinhHoa'];
				$GhiChu = $row['GhiChu'];
			echo '
           			<tr>
                        <td>'.$dem.'</td>
						<td>'.$MaBienBan.'</td>
                        <td>'.$ngayLap.'</td>
                        <td>'.$ThongTinSuCo.'</td>
                        <td>'.$MaSanPham.'</td>
						<td>'.$HinhAnhHoacTaiLieuMinhHoa.'</td>
						<td>'.$GhiChu.'</td>
                    </tr>';
				$dem ++;
			}
		}
		else
		{
			echo 'Không có dữ liệu';
		}
		mysqli_close($link);
	}
	
	public function themxoasua($sql)
	{
		$link = $this -> connect();
		if(mysqli_query($sql, $link))
		{
			return 1;
		} else
		{
			return 0;
		}
	}
}

?>