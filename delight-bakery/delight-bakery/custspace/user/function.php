<?php
	function get_product_name($p_id){
		$result=mysql_query("SELECT product_name FROM productlist WHERE product_id=$p_id") or die("select name from productlist WHERE product_id=$p_id"."<br/><br/>".mysql_error());
		$row=mysql_fetch_array($result);
		return $row['product_name'];
	}
	
	function get_picture($p_id){
		$result=mysql_query("SELECT product_picture FROM productlist WHERE product_id=$p_id") or die("SELECT product_picture FROM productlist WHERE product_id=$p_id"."<br /><br />".mysql_error());
		$row=mysql_fetch_array($result);
		return $row['product_picture'];
	}
	
	function get_price($p_id){
		$result=mysql_query("SELECT product_price FROM productlist WHERE product_id=$p_id") or die("select name from productlist WHERE product_id=$p_id"."<br/><br/>".mysql_error());
		$row=mysql_fetch_array($result);
		return $row['product_price'];
	}
	
	function remove_product($p_id){
		$p_id=intval($p_id);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($p_id==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++)
			{
				$p_id=$_SESSION['cart'][$i]['productid'];
				$q=$_SESSION['cart'][$i]['qty'];
				$price=get_price($p_id);
				$sum+=$price*$q;
			}
		if($sum>15)
			{
			if($sum>30)
				{
					if($sum>50)
					{
						if($sum>100)
						{
							$sum = $sum*0.82+7;
						}
						else
							$sum = $sum*0.9+7;
					}
					else
						$sum = $sum * 0.94+7;
				}
				else
					$sum = $sum * 0.97+7;
			}
			else
				$sum=$sum+7;
			
			return $sum;
		}
	function addtocart($p_id,$q){
		if($p_id<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($p_id)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$p_id;
			$_SESSION['cart'][$max]['qty']=$q;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$p_id;
			$_SESSION['cart'][0]['qty']=$q;
		}
	}
	function product_exists($p_id){
		$p_id=intval($p_id);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($p_id==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>