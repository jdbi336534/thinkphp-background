<?php

namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		// echo 'HelloWorld!';
		$this -> display(login);
	}

	public function verify_c() {
		$config = array('fontSize' => 30, 'length' => 4, 'useNoise' => true, 'imageH' => 0, 'imageW' => 0, );

		$Verify = new \Think\Verify($config);
		// $Verify->useZh = true;   //使用中文
		$Verify -> entry(1);

	}

	public function openurl() {
		$this -> display(reg);
	}

	public function openlogin() {
		$this -> display(login);
	}
	public function openlist() {
		$this -> display(listpro);
	}
	public function openback() {
		$this -> display(background);
	}





	public function opencontrol() {
		if ($_SESSION['name'] != null) {
			$this -> display(index);
		} else {
			//$this->error('你还没有登陆，请登录！');
			$this -> success('你还没有登陆，请登录！', 'openlogin', 3);
		}
	}

	public function tocheckcode($verify = null) {
		if (IS_GET) {
			if (!check_code($verify)) {
				echo -1;
			} else {
				echo 1;
			}
		}

	}

	public function insert($username = null, $password = null) {

		if (IS_POST) {
			//      if(!check_code($verify)){
			//      $this->error('验证码错误');
			//      }else{
			// echo $password;
			$d['username'] = $username;
			$password = trim($password);
			$M = M('account');
			$d['code'] = trim(rand(1000, 9999));
			// echo   $d['code'];
			$d['password'] = md5($password . $d['code']);

			// echo $d['password'];

			$Q = $M -> add($d);
			if ($Q) {
				echo "1";
				// echo '注册成功！感谢你使用智能家居中央管理系统！';
				//$this -> success('注册成功！感谢你使用智能家居中央管理系统！请登录-------->', 'openlogin', 2);
			} else {
				echo "-1";
				//$this->error('注册失败');
				//echo '注册失败';
			}

			// $this->error('验证码正确\n');

		}
		//  }
	}

	//电话号码验证
	public function phonecheck($phone = null) {
		if (IS_POST) {
			$phone = trim($phone);
			$M = M('account');
			$sql['username'] = $phone;
			$que = $M -> where($sql) -> find();
			if (!$que) {
				//$this->error('帐号不存在或被禁用');
				echo -1;
			} else {
				echo 1;
			}
		}

	}
	

	public function login($username = null, $password = null) {

		$password = trim($password);
		//选择表
		$M = M('account');
		//查询数据
		$sql['username'] = $username;
		$que = $M -> where($sql) -> find();

		//echo $que['username'].'------>';
		//echo $que['code'].'------>';
		// echo md5($password);
		if (!$que) {
			$this -> error('帐号不存在或被禁用');
		}
		if ($que['password'] == md5($password . $que['code'])) {
			// $this->error('密码正确');
			// echo $username;
			session('name', $username);
			// echo $change.'----->';
			 

			$this -> success('登陆成功', 'opencontrol', 2);

			//$this->display(control);
		} else {
			$this -> error('密码错误');
		}

	}
	
	

 public function readlist() {
        $array = array();
        //选择表
        $M = M('listtable');
        $hmany = $M -> count();
        //echo $hmany;
        //查询数据
        //$sql['id'] = '1';
        //for($i=0;$i<$hmany;$i++){
        //$map['id'] = array('lt', $hmany + 1);


        //$que = $M -> where($map) -> select();
        $que = $M -> limit('0,'+$hmany) -> select();
        if (!$que) {
            //$this -> error('帐号不存在或被禁用');
        } else {
            echo json_encode($que);
            //array_push($array, $que);
            //var_dump($que);
        }

}

//从数据库删除数据
	public function deldata($id=null){
	if(IS_POST){
		$listtable = M("listtable");
		$map['id'] = $id;
		// 删除 id=$id 的数据记录
             $result = $listtable->where($map)->delete();
            if ($result!==false){
                echo "ok";
            }else {
                echo -1;
            }
	}
}
    
    //从数据库添加数据
    public function database($prdprice = null, $prdname1 = null, $prdname2 = null,$prdi=null, $prdfont1 = null, $prdfont2 = null, $prdpingjia = null, $prddianpu = null, $prdimgsrc = null) {
        if (IS_POST) {
        	
            $listtable = M("listtable");
            $data['prdprice'] = $prdprice;
            $data['prdname1'] = $prdname1;
            $data['prdname2'] = $prdname2;
            $data['prdfont1'] = $prdfont1;
            $data['prdi'] = $prdi;
            $data['prdfont2'] = $prdfont2;
            $data['prdpingjia'] = $prdpingjia;
            $data['prddianpu'] = $prddianpu;
            $data['prdimgsrc'] = $prdimgsrc;
            $insert_id = $listtable -> add($data);
             if ($insert_id !== false) {
                echo '数据添加成功！';
            } else {
                echo '数据添加失败！';
            }
        }
    }
//从数据库修改数据
    public function xiudatabase($id=null,$prdprice = null, $prdname1 = null, $prdname2 = null,$prdi=null, $prdfont1 = null, $prdfont2 = null, $prdpingjia = null, $prddianpu = null, $prdimgsrc = null) {
        if (IS_POST) {
            $listtable = M("listtable");
             // 需要更新的数据
            $data['prdprice'] = $prdprice;
            $data['prdname1'] = $prdname1;
            $data['prdname2'] = $prdname2;
            $data['prdfont1'] = $prdfont1;
            $data['prdi'] = $prdi;
            $data['prdfont2'] = $prdfont2;
            $data['prdpingjia'] = $prdpingjia;
            $data['prddianpu'] = $prddianpu;
            $data['prdimgsrc'] = $prdimgsrc;
           
           
            // 更新的条件
            $condition['id'] = $id;
            $result = $listtable -> where($condition) -> save($data);
            //或者：$resul t= $Dao->where($condition)->data($data)->save();
            if ($result !== false) {
                echo '数据更新成功！';
            } else {
                echo '数据更新失败！';
            }
        }

}

//从数据库读取轮播图
	public function readlunbo(){
	if(IS_GET){
		$lunbo = M("lunbo");
		
             $result = $lunbo->select();
            if ($result!==false){
                echo json_encode($result);
                //var_dump($result);
                
            }else {
                echo -1;
            }
	}
}



}