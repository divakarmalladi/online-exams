var base_url = 'http://local.keytoquestions.com:8073/';
var emailFilter =  /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
var charFilter = /^[a-zA-Z\s]+$/;
var pwdvalid=/^[a-zA-Z0-9]+$/;
var charFilterspecial=/^[a-zA-Z._^%$#!~@,-\s]+$/;



function string_validate(val,minLen,maxLen,fName, type){
	
	if(typeof type === "undefined" || type === null) { 
       type='enter';
	}else if(type=='select'){
	   type='select';
	}else{
	   type='enter';
	}
	
    var errs = '';
    val = val.toString();
    if(val==''){errs ='Please enter '+fName;}
    else if(val.length<minLen){errs = 'Please '+type+' minimum '+minLen+' characters';}
    else if(maxLen>0 && val.length>maxLen){errs = 'Please '+type+' '+maxLen+' characters';}
    else if(!charFilter.test(val)){errs = 'Please '+type+' alphabets only';}
    else{errs='';}
    return errs;
}

function varchar_validate(val,minLen,maxLen,fName, type){
	if(typeof type === "undefined" || type === null) { 
       type='enter';
	}else if(type=='select'){
	   type='select';
	}else{
	   type='enter';
	}
    var errs = '';
    val = val.toString();
    if(val==''){errs = 'Please '+type+' '+fName;}
    else if(val.length<minLen){errs = 'Please '+type+' minimum '+minLen+' characters';}
    else if(maxLen>0 && val.length>maxLen){errs = 'Please '+type+' '+maxLen+' characters';}
    else{errs='';}
    return errs;
}

function email_validate(val,minLen,maxLen,fName,errId){
    var errs = '';
    val = val.toString();
    if(val==''){errs = 'Please enter '+fName;}
    else if(val.length<minLen){errs = 'Please enter minimum '+minLen+' characters';}
    else if(maxLen>0 && val.length>maxLen){errs = 'Please enter '+maxLen+' characters';}
    else if(!emailFilter.test(val)){errs = 'Please enter valid email';}
    else{errs='';}
    return errs;
}

function int_validate(val,minLen,maxLen,fName,errId, type){
	
	if(typeof type === "undefined" || type === null) { 
       type='enter';
	}else if(type=='select'){
	   type='select';
	}else{
	   type='enter';
	}
	
    var errs = '';
    val = val.toString();
    if(val==''){errs ='Please enter '+fName;}
    else if(isNaN(val)){errs = 'Please enter numbers only';}
    else if(val.length<minLen){errs = 'Please enter minimum '+minLen+' digits';}
    else if(maxLen>0 && val.length>maxLen){errs = 'Please enter '+maxLen+' digits';}
    
    else{errs='';}
    return errs;
}

function url_validate(val,minLen,maxLen,fName,errId){
    var errs = '';
    val = val.toString();
    if(val==''){errs ='Please enter '+fName;}
    else{errs='';}
    return errs;
}

function file_validate(val,minLen,maxLen,fName,errId,allowed){
    var errs = '';
    var ext = val.split('.').pop().toLowerCase();
    val = val.toString();
    if(val==''){errs ='Please Upload '+fName;}
    else{errs='';}
    return errs;
}

function stringspecial_validate(val,minLen,maxLen,fName, type){
    
    if(typeof type === "undefined" || type === null) { 
       type='enter';
    }else if(type=='select'){
       type='select';
    }else{
       type='enter';
    }
    
    var errs = '';
    val = val.toString();
    if(val==''){errs ='Please enter '+fName;}
    else if(val.length<minLen){errs = 'Please '+type+' minimum '+minLen+' characters';}
    else if(maxLen>0 && val.length>maxLen){errs = 'Please '+type+' '+maxLen+' characters';}
    else if(!charFilterspecial.test(val)){errs = 'Please '+type+' alphabets only';}
    else{errs='';}
    return errs;
}

function error_list(err){
    $('.error').html('');
    var errors = $.each(err, function(key, value){
        if(value!=''){ $('#'+key+'_error').html(value);}else{delete(err[key]);}
    });
    return errors;
}

function ajax_request(sourceUrl, returnUrl, postData, methodType, buttonVal='' ){
    if(sourceUrl!=''){
        if(buttonVal!=''){$('#'+buttonVal).prop('disabled',true);}
        $.ajax({
            url:base_url+sourceUrl,
            type:methodType,
            data:postData,
            success: function(resp){
                if(buttonVal!=''){$('#'+buttonVal).prop('disabled',false);}
                res = JSON.parse(resp);
                if(res.status==200){
                    if(res.retUrl!=''){
                        window.location.href=base_url+res.retUrl;
                    }else if(returnUrl!=''){
                        window.location.href=base_url+returnUrl;
                    }else{
                        $('#success_error').html(res.message).css('color','green');
                    }
                }else{
                    if(res.status==500){
                        error_list(res.data);    
                    }else{
                        $('#success_error').html(res.message).css('color','red');;
                    }
                }
            }
        });
    }
}
// $("#reg_form").on('click',function(){
    
// })