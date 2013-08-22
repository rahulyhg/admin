<?php

class CouponsController extends Controller
{
	public function beforeAction()
	{
		$user = Yii::app()->session->get('user');
		if(!isset($user)) {
			$this->redirect(Yii::app()->user->loginUrl);
			return false;
		}
		return true;
	}
	
/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('generate','index'),
				'users'=>array('admin'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('print','export'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionGenerate()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['count']) && !empty($_POST['count']))
		{
			$batchNumber = null;
			$count  = intval($_POST['count']);
			$loop = $count/10;
			$connection=Yii::app()->db;
			
				for ($j = 0; $j < $loop; $j++) {
					try{
				$transaction=$connection->beginTransaction();
					$batchNumber = $this->generateBatchNumber();
					$serialNumber = $this->generateRandumSerialNumber();

					for ($i = 0; $i < 10; $i++) {
			$coupon = new Coupon();
	    	$coupon->couponCode = $this->createCouponCode();
	    	$coupon->batchNo = $batchNumber;
	    	$coupon->serialNo = $serialNumber;
	    	$coupon->creationDate = new CDbExpression('NOW()');
	    	$coupon->startDate = $_POST['startDate'];
	    	$coupon->endDate = $_POST['endDate'];
	    	$coupon->couponId = $serialNumber.$i;
	    	if(isset($_POST['type']) && $_POST['type'] == 'normal')
	    	{
	    		$coupon->validity = 0;
	    		$coupon->couponType = 'normal';
	    	}
	    	else
	    	{

	    		$coupon->validity = isset($_POST['validity']) ? $_POST['validity'] : 0;
	    		$coupon->couponType = 'promo';
	    	}
	    	$coupon->save();
	    }
				
				$transaction->commit();
			}
			catch (Exception $e){
				$transaction->rollback();
				$this->forward('index',array('error'=>true));
				return;
			}
		}
			$couponLog = new CouponLogs();
	    	$couponLog->batchNo = $batchNumber;
	    	$couponLog->creationTime = new CDbExpression('NOW()'); 
	    	$couponLog->adminUserId = $user->adminId;
	    	$couponLog->save(); 
	    	
		$this->render('success');
		}
		else
		{
			$this->render('index');
		}
	}

	public function actionPrint()
	{
		$this->render('printCoupon');
	}

		
	public function actionExport()
	{
		if(isset($_POST['startDate']) && !empty($_POST['startDate']))
		{
				$start = $_POST['startDate'];
				$end = $_POST['endDate'];
				$condition = "startDate >= '{$start}' and endDate <= '{$end}' and isUsed != 1";
				$data= Coupon::model()->findAll(array('condition'=>$condition,
				'order'=> 'serialNo DESC' ));
				$this->generateCSV($data);
				$this->render('printCoupon',array('file'=>$file ));
					
		}
		else 
		$this->render('printCoupon');
		}
		
			
		private function createCouponCode() {
			$chars = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
			srand((double)microtime()*1000000);
			$i = 0;
			$code = '' ;
			while ($i < 15)
			{
				$num = rand() % 33;
				$tmp = substr($chars, $num, 1);
				$code = $code . $tmp;
				$i++;
			}
			return $code;
		}

		private function generateCouponCodeData($_POST)
		{
			$dataArray = array();
			$batchNumber = $this->generateBatchNumber();
			$serialNumber = $this->generateRandumSerialNumber();
			for ($i = 0; $i < 10; $i++) {
				$dataArray[$i]['couponCode'] = $this->createCouponCode();
				$dataArray[$i]['batchNumber'] = $batchNumber;
				$dataArray[$i]['serialNumber'] = $serialNumber;
				$dataArray[$i]['startDate'] = $_POST['startDate'];
				$dataArray[$i]['endDate'] = $_POST['endDate'];
				$dataArray[$i]['couponId'] = $serialNumber.$i;
				if(isset($_POST['type']) && $_POST['type'] == 'normal')
				{
					$dataArray[$i]['validity'] = 0;
					$dataArray[$i]['couponType'] = 'normal';
				}
				else
				{

					$dataArray[$i]['validity'] = isset($_POST['validity']) ? $_POST['validity'] : 0;
					$dataArray[$i]['couponType'] = 'promo';
				}
			}
			return $dataArray;
		}

		private function generateBatchNumber()
		{
			return date('dmY');
		}

		private function generateRandumSerialNumber()
		{
			$chars = "0123456789";
			$res = "";
			for ($i = 0; $i < 8; $i++) {
				$res .= $chars[mt_rand(0, strlen($chars)-1)];
			}
			return $res;
		}

		public function generateCSV($data)
		{
			$fileName = date('j-n-Y_i_s');
			$fp = fopen("{$fileName}.csv", 'w');
			$column = true;
			foreach ($data as $row) {
				if($column)
				{
					$columns = array_values(Coupon::model()->attributeLabels());
					fputcsv($fp, $columns);
				}
				$column = false;
				fputcsv($fp, array($row->couponCode,$row->creationDate,
			$row->startDate,
			$row->endDate,
			$row->validity,
			$row->batchNo,
			$row->serialNo,
			$row->couponId,
			$row->couponType));
			}
			fclose($fp);
			/*			 Yii::app()->request->xSendFile("{$fileName}.csv",array(
			       'saveName'=>"coupon.csv",
			       'mimeType'=>'text/csv',
			       'terminate'=>true,
			   )); */

		}
			
	}