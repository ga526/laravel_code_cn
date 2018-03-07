<?php
    //common部分

interface Tool{

    function useToWork(array $option = []);

}

class chuizi implements Tool{
    function useToWork(array $options = []){
        echo "用锤子";
    }
}

class fuzi implements Tool{
    function useToWork(array $options = []){
        echo "用斧子";
    }
}


    //原始
class userObjOld{
    private $tools;
    public function __construct(){
        $this ->tools = new chuizi();
    }

    function work(array $options = []){
        //todo anything
        echo "is time to ";
        $this ->tools ->useToWork($options);
        echo " work";
    }
}


/* --------------------- 原始部分 start ---------------------- */
$userObj = new userObjOld();
$userObj ->work();
//只能用锤子工作

/* --------------------- 原始部分 end   ---------------------- */



//依赖注入

class userObj {

    private $tools = null;

    public function setTool(Tool $tool){
        $this ->tools = $tool;
        return $this;
    }

    function work(array $options = []){
        //todo anything
        echo "is time to ";
        $this ->tools ->useToWork($options);
        echo " work";
    }

}



/* --------------------- 依赖注入部分 start ----------------------
$tool = new chuizi();
$userObj = new userObj();
$userObj ->setTool($tool) ->work();
//换一个工具
$tool = new fuzi();
$userObj ->setTool($tool) ->work();

 --------------------- 依赖注入部分 end   ---------------------- */


//依赖倒置，控制反转  loc

