<?php
#setting up the states for the 9 tic tac toe boxes
var boxes_left = 9
var boxes[] = [false,false,false,false,false,false,false,false,false];
var xes[] = [false,false,false,false,false,false,false,false,false];
var oes[] = [false,false,false,false,false,false,false,false,false];

# todo input stuff

#todo checking for winning rows
#0|1|2
#3|4|5
#6|7|8
public function check_boxes($boxes)
{
	if($boxes[0] || $boxes[4]|| $boxes[8]){
		if ($boxes[0]) {
			if ($boxes[4] && $boxes[8]) {
				return true, '048';
			}elseif ($boxes[1] && $boxes[2]) {
				return true, '012';
			}elseif ($boxes[3] && $boxes[6]) {
				return true, '036';
			}
			
		} elseif ($boxes[4]) {
			if ($boxes[3] && $boxes[5]) {
				return true, '345';
			}elseif ($boxes[1] && $boxes[7]) {
				return true, '147';
			}
		}
		 elseif ($boxes[8]) {
			if ($boxes[2] && $boxes[5]) {
				return true, '258';
			}elseif ($boxes[6] && $boxes[7]) {
				return true, '678';
			}
		}
	}else{
		return false, "";
	}

}
