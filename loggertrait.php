<?php 
trait loggertrait{
    public function log($msg){
        echo "<p style='color:gray;'>[LOG]:$msg</p>";
    }
}
?>