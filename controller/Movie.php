<?php
include_once "DB.php";
class Movie extends DB{
    function __construct(){
        parent::__construct('movie');
    }
    function backend(){
        $view=[
        "rows"=>$this->all("order by `rank`"),];
         $this->view("./view/backend/movie.php",$view);     
    }

    function movies(){
        $today=date("Y-m-d");
        $prevDate=date("Y-m-d",strtotime("-2 days"));
        $rows=$this->paginate(4," where `sh`= 1 && `ondate` between '{$prevDate}' AND '{$today}' order by `rank`");
        return $rows;
    }

    function level($level){
        $str=[
            1=>"普遍級",
            2=>"輔導級",
            3=>"保護級",
            4=>"限制級"
        ];
        return $str[$level];
    }
}
?>