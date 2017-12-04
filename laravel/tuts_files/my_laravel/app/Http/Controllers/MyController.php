<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\Session;

use Sensitive;

class MyController extends Controller{

    protected $tableName = 'student'; 
    protected $tableName1 = 'rili'; 
	public function Index()
	{
		 $data=DB::table($this->tableName)->get();

		 return view('index',['data'=>$data]);

	}
	public function delete()
	{

		$id= Input::get('id');

		$data=DB::table($this->tableName)->where(['id'=>$id])->delete();

		if($data)
		{

			 echo '<script>alert("删除成功");location.href="'.'index'.'";</script>';
		}
    }

    public function add()
    {

    	return view('add');
 
    }
    public function add_do()
    {	
		$interference = ['&', '*'];
		$filename = 'D:\phpStudy\WWW\laravel\tuts_files\my_laravel\vendor\yankewei\laravel-sensitive\demo\words.txt';
		Sensitive::interference($interference); //添加干扰因子
		Sensitive::addwords($filename); //需要过滤的敏感词

    	$input= Input::all();
    	$data['name'] = $input['name'];
    	$data['name'] = Sensitive::filter($data['name']);
    	$data['sex'] = $input['sex'];
    	$data['sex'] = Sensitive::filter($data['sex']);
    	$re=DB::table($this->tableName)->insert($data);
    	if($re)
    	{
    		 echo '<script>alert("添加成功");location.href="'.'index'.'";</script>';

    	}
    }
    public function xiu()
    {	
    	$id= Input::get('id');

    	$data=DB::table($this->tableName)->where(['id'=>$id])->first();

    	return view('xiu',['data'=>$data]);

    }
    public function xiu_do()
    {
    	$input= Input::all();
    	$id= $input['id'];
    	$data['name']=$input['name'];
    	$data['sex']=$input['sex']; 
    	$re= DB::table($this->tableName)->where(['id'=>$id])->update($data);
    	if($re)
    	{
    		echo '<script>alert("修改成功");location.href="'.'index'.'";</script>';

    	}
    }

    public function res()
    {

    	
    	$a=new \redis();
    	$a->connect('127.0.0.1','6379');
    	$a->set('aa','yuyuyuyuyuy'); 
    	$b=$a->get('aa');            
    	// $b=$a->rpop('aa');
    	var_dump($b);die;

    }
    public function tian()
    {

            return view('tian');  	


    }
    public function tian_do()
    {
    

        $input= Input::all();

       $time = strtotime($input['time']);

       Session::put('name',$input['name']);

       $data['name']= $input['name'];
       $data['content']= $input['content'];
       $data['time'] = $time;

       $res = DB::table($this->tableName1)->insert($data);
        
       Redis::lpush('name',$input);
 
       echo '<script>alert("添加成功");location.href="'.'show'.'";</script>';

    }
    public function show()
    {

        $name= Session::get('name');

        $data= DB::table($this->tableName1)->where('name',$name)->get();
    
        $time= time();

        return view('show',['data'=>$data,'time'=>$time]);

    }


}

?>