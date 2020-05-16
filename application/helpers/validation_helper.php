<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function xss_security($value)
{
	if(is_array($value))return $value;
    $newVal = strip_tags(htmlspecialchars(trim($value)));
    return $newVal;
}
function sqli_security($value)
{
	if(is_array($value))return $value;
    $ci=&get_instance()->db->conn_id;
    $newVal = mysqli_real_escape_string($ci,xss_security($value));
    return $newVal;
}
function password_validate($field,$val,$minlen=0,$maxlen=0)
{

	if($val!=""){
		if(strlen($val)<$minlen){$error=$field." Must be Minimum".$minlen." Characters";}
		if($maxlen>strlen($val)){$error=$field." Must be Maximum".$maxlen." Characters";}
		//if(!preg_match('/^([a-zA-Z+]+[0-9+]+[&@!#+]+)$/', $val)) {
		//$error= 'The Password Must Contain 1 letter,1 number & 1 symbol';
		//}
	}
	else{
		$error="Please Enter ".$field;
	}
	if(!empty($error)){return $error;/*$success[$field] = $val;*/}

}
function int_validate($field,$val,$minlen=0,$maxlen=0)
{
	if($val!=""){
		//if(is_array($val))return $val;
		if(strlen($val)<$minlen){$error=$field." Must be Minimum".$minlen." Numbers";}
		if($maxlen<strlen($val) && $maxlen!=0){$error=$field." Must be Maximum".$maxlen." Numbers";}
		if(!is_numeric($val)){$error=$field." Accepts only Numbers";}
		//$val=xss_validate($val);
	}else{$error="Please Enter ".$field;}
	if(!empty($error)){return $error;/*$success[$field] = $val;*/}
	//else{return $error;}
	//return $varer;
}
function varchar_validate($field,$val,$minlen=0,$maxlen=0)
{
	if($val!=""){
		if(strlen($val)<$minlen){$error=$field." Must be Minimum".$minlen." Characters";}
		if(strlen($val)>$maxlen && $maxlen!=0){$error=$field." Must be Maximum".$maxlen." Characters";}
		//$val=xss_validate($val);
	}
	else{$error="Please Enter ".$field;}
	if(!empty($error)){return $error;/*$success[$field] = $val;*/}
	//else{return $error;}
	//return $varer;
}
function string_validate($field,$val,$minlen=0,$maxlen=0){
	if($val!=""){
		if(strlen($val)<$minlen){$error=$field." Must be Minimum ".$minlen." Characters";}
		if($maxlen!=0 && strlen($val)>$maxlen){$error=$field." Must be Maximum ".$maxlen." Characters";}
		if(ctype_alpha(str_replace(' ', '', $val)) === false){$error=$field." Accepts Only Alphabets";}
		//$val=xss_validate($val);
	}
	else{$error="Please Enter ".$field;}
	if(!empty($error)){return $error;/*$success[$field] = $val;*/}
	//else{return $error;}
	//return $varer;
}
function email_validate($field,$val,$minlen=0,$maxlen=0){
	if($val!=""){
		if(strlen($val)<$minlen){$error=$field." Must be Minimum ".$minlen." Characters";}
		if(strlen($val) > $maxlen){$error=$field." Must be Maximum ".$maxlen." Characters";}
		if(!filter_var($val,FILTER_VALIDATE_EMAIL)){$error="Invalid Email";}
		//$val=xss_validate($val);
	}
	else{
		$error="Please Enter ".$field;
		}

	if(!empty($error)){return $error;/*$success[$field] = $val;*/}
	//else{return $error;}
	//return $varer;
}

function optional_validate($field,$val,$minlen=0,$maxlen=0){
	if($val!=""){
		if($minlen>0 && strlen($val) < $minlen){$error=$field." Must be Minimum ".$minlen." Characters";}
		if($maxlen>0 && strlen($val) > $maxlen){$error=$field." Must be Maximum ".$maxlen." Characters";}
	} else{
		$error="";
	}
	if(!empty($error)){return $error;}
}

function alphanum_validate($field,$val,$minlen=0,$maxlen=0){
	if($val!=""){
		if($minlen>0 && strlen($val) < $minlen){$error=$field." Must be Minimum ".$minlen." Characters";}
		if($maxlen>0 && strlen($val) > $maxlen){$error=$field." Must be Maximum ".$maxlen." Characters";}
		if(ctype_alnum(str_replace(' ', '', $val)) === false){$error=$field." Accepts Only Alphanumeric";}
	} else{
		$error="Please Enter ".$field;
	}
	if(!empty($error)){return $error;}
}

// function url_validate($field,$val,$minlen=0,$maxlen=0){
// 	if($val!=""){
// 		$re = "/^((ht|f)tp(s?)\:\/\/|~/|/)?([w]{2}([\w\-]+\.)+([\w]{2,5}))(:[\d]{1,5})?/";
// 		if(strlen($val)<$minlen){$error=$field." Must be Minimum ".$minlen." Characters";}
// 		if($maxlen!=0 && strlen($val)>$maxlen){$error=$field." Must be Maximum ".$maxlen." Characters";}
// 		if(!preg_match($re, $val)){$error="Invalid Url";}
// 	}
// 	else{$error="Please Enter ".$field;}
// 	if(!empty($error)){return $error;}
// }
function check_file_extension($fild_name,$type='Image'){
    $bool=TRUE;
    $extension=pathinfo($fild_name,PATHINFO_EXTENSION);
    if(!empty($extension)){
        $bool=FALSE;
        if($type=='Image'){
           
            $image_arr=array('gif','jpg','png');
            if(in_array($extension,$image_arr))$bool=TRUE;
        }
		elseif($type=='Document'){
           
            $file_arr=array('pdf','doc','docx','rtf','txt');
            if(in_array($extension,$file_arr))$bool=TRUE;
        }
    }
    return $bool;
}

function file_extension_check($fild_name,$type='Image'){
    $bool=TRUE;
    $extension=pathinfo($fild_name,PATHINFO_EXTENSION);
    if(!empty($extension)){
        $bool=FALSE;
        if($type=='Image'){
            $this->form_validation->set_message('file_check', 'Please select only gif / jpg / png file.');
            $image_arr=array('gif','jpg','png');
            if(in_array($extension,$image_arr))$bool=TRUE;
        }
		elseif($type=='Document'){
            $this->form_validation->set_message('file_check', 'Please select only pdf,doc,docx,txt,rtf file.');
            $file_arr=array('pdf','doc','docx','rtf','txt');
            if(in_array($extension,$file_arr))$bool=TRUE;
        }
		elseif($type=='CSV'){
            $this->form_validation->set_message('file_check', 'Please select only csv file.');
            $file_arr=array('csv');
            if(in_array($extension,$file_arr))$bool=TRUE;
        }
    }
    return $bool;
}















?>
