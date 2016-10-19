	<?php 
	class Order
	{
		private $order_code;
		private $order_date;
		private $order_total;
		private $order_list = array();
		function __construct($code,$date,$orderItem)
		{
			$this->order_code = $code;
			$this->order_date = $date;
			$this->order_list[] = $orderItem;
			$this->order_total = 0;
		}
		
		function addOrderItem($orderItem){
				$this->order_list[] = $orderItem;
		}
		function disPlayOrderItem(){
			foreach ($this->order_list as $od) {
				$this->order_total += $od->getTotalOrderItem();
				$od->Display();
			}
		}
		
		function disPlayOrder(){
			echo "<br>----- Order info ----";
			echo "<br>Order code: ".$this->order_code;
			echo "---- Order date: ".$this->order_date;
			echo "---- Order total: ".$this->order_total;
			
		}
	}

 ?>
